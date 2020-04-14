<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gmc;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::paginate( 20 );
        return view('dashboard.notification.index', ['notifications' => $notifications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.notification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'     => 'required',
            'message'   => 'required',
            'logo'      => 'required',
            'name'      => 'required',
            'url'       => 'required'
        ]);
        $notify = new Notification();
        $notify->title = $request->input('title');
        $notify->message = $request->input('message');
        $notify->logo = $request->input('logo');
        $notify->name = $request->input('name');
        $notify->url = $request->input('url');
        $notify->save();
        //send notification
        $url = 'https://fcm.googleapis.com/fcm/send';
        $headers = array (
            'Authorization: key=' . env('API_KEY_FIREBASE', ''),
            'Content-Type: application/json'
        );
        /*
        $rids = Gmc::all();
        $fields = array (
            'registration_ids' => array (),
            'message_id' => 'm-' . $notify->id . '-' . rand(0, 1000000),
            'data' => array (
                    "message" => 'abc'
            ),
            "time_to_live" => 1000
        );
        
        foreach($rids as $rid){
            array_push($fields['registration_ids'], $rid->rid );
        }

        $fields = json_encode ($fields);
        */

        $rids = Gmc::all();
        $tokens = array();
        foreach($rids as $rid){
            array_push($tokens, $rid->rid );
        }


        if(!empty($rid)){
            $fields = array (
                'registration_ids' => $tokens,
                'message_id' => 'm-' . $notify->id . '-' . rand(0, 1000000),
                'data' => array (
                        "message" => 'abc'
                ),
                "time_to_live" => 1000
            );
            $fields = json_encode ($fields);

            $ch = curl_init ();
            curl_setopt ( $ch, CURLOPT_URL, $url );
            curl_setopt ( $ch, CURLOPT_POST, true );
            curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
            curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt ( $ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
            curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );
            $result = curl_exec ( $ch );
            curl_close ( $ch );
            var_dump($result);
            var_dump($fields);
            die();
        }else{

        }

        $request->session()->flash('message', 'Successfully created new notification');
        return redirect()->route('notification.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.notification.show', ['notification' => Notification::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.notification.edit', ['notification' => Notification::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'     => 'required',
            'message'   => 'required',
            'logo'      => 'required',
            'name'      => 'required',
            'url'       => 'required'
        ]);
        $notify = Notification::find($id);
        $notify->title = $request->input('title');
        $notify->message = $request->input('message');
        $notify->logo = $request->input('logo');
        $notify->name = $request->input('name');
        $notify->url = $request->input('url');
        $notify->save();
        $request->session()->flash('message', 'Successfully updated notification');
        return redirect()->route('notification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $notify = Notification::find($id);
        if($notify){
            $notify->delete();
        }
        $request->session()->flash('message', 'Successfully deleted notification');
        return redirect()->route('notification.index');
    }

    public function getNotification(){
        return response()->json(array(
            'notification' => Notification::latest()->first()
        ));
    }

    public function getGMC(){
        $user = auth()->user();
        $gmc = Gmc::where('user_id', '=', $user->id)->first();
        if(empty($gmc)){
            $result = false;
        }else{
            $result = true;
        }
        return response()->json(array('result' => $result));
    }

    public function setGMC(Request $request){
        $user = auth()->user();
        $gmc = new Gmc();
        $gmc->user_id = $user->id;
        $gmc->rid = $request->input('gmc');
        $gmc->save();
        return response()->json(array('result' => 'success'));
    }

    public function deleteGMC(Request $request){
        $user = auth()->user();
        $gmc = Gmc::where('user_id', '=', $user->id)->first();
        $gmc->delete();
        return response()->json(array('result' => 'success'));
    }
}
