<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emailTemplates = EmailTemplate::paginate( 20 );
        return view('dashboard.email.index', ['emailTemplates' => $emailTemplates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.email.create');
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
            'name'    => 'required|min:1|max:64',
            'subject' => 'required|min:1|max:128',
            'content' => 'required|min:1',
        ]);
        $template = new EmailTemplate();
        $template->name = $request->input('name');
        $template->subject = $request->input('subject');
        $template->content = $request->input('content');
        $template->save();
        $request->session()->flash('message', 'Successfully created Email Template');
        return redirect()->route('mail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $template = EmailTemplate::find($id);
        return view('dashboard.email.show', [ 'template' => $template ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $template = EmailTemplate::find($id);
        return view('dashboard.email.edit', [ 'template' => $template ]);
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
            'name'    => 'required|min:1|max:64',
            'subject' => 'required|min:1|max:128',
            'content' => 'required|min:1',
        ]);
        $template = EmailTemplate::find($id);
        $template->name = $request->input('name');
        $template->subject = $request->input('subject');
        $template->content = $request->input('content');
        $template->save();
        $request->session()->flash('message', 'Successfully updated Email Template');
        return redirect()->route('mail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $template = EmailTemplate::find($id);
        if($template){
            $template->delete();
        }
        $request->session()->flash('message', 'Successfully deleted Email Template');
        return redirect()->route('mail.index');
    }

    public function prepareSend($id){
        $template = EmailTemplate::find($id);
        return view('dashboard.email.send', [ 'template' => $template ]);
    }

    public function send($id, Request $request){
        $template = EmailTemplate::find($id);
        Mail::send([], [], function ($message) use ($request, $template)
        {
            $message->to($request->input('email'));
            $message->subject($template->subject);
            $message->setBody($template->content,'text/html');
        });
        $request->session()->flash('message', 'Successfully sended Email');
        return redirect()->route('mail.index');
    }
}
