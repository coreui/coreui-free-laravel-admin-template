<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menulist;
use App\Models\Menus;
use Illuminate\Validation\Rule;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(Request $request){
        return view('dashboard.editmenu.menu.index', array(
            'menulist'  => Menulist::all()
        ));
    }

    public function create(){
        return view('dashboard.editmenu.menu.create',[]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:1|max:64'
        ]);
        $menulist = new Menulist();
        $menulist->name = $request->input('name');
        $menulist->save();
        $request->session()->flash('message', 'Successfully created menu');
        return redirect()->route('menu.menu.create'); 
    }

    public function edit(Request $request){
        return view('dashboard.editmenu.menu.edit',[
            'menulist'  => Menulist::where('id', '=', $request->input('id'))->first()
        ]);
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id'   => 'required',
            'name' => 'required|min:1|max:64'
        ]);
        $menulist = Menulist::where('id', '=', $request->input('id'))->first();
        $menulist->name = $request->input('name');
        $menulist->save();
        $request->session()->flash('message', 'Successfully update menu');
        return redirect()->route('menu.menu.edit', ['id'=>$request->input('id')]); 
    }

    /*
    public function show(Request $request){
        return view('dashboard.editmenu.menu.show',[
            'menulist'  => Menulist::where('id', '=', $request->input('id'))->first()
        ]);
    }
    */

    public function delete(Request $request){
        $menus = Menus::where('menu_id', '=', $request->input('id'))->first();
        if(!empty($menus)){
            $request->session()->flash('message', "Can't delete. This menu have assigned menu elements");
            $request->session()->flash('back', 'menu.menu.index');
            return view('dashboard.shared.universal-info');
        }else{
            Menulist::where('id', '=', $request->input('id'))->delete();
            $request->session()->flash('message', 'Successfully deleted menu');
            $request->session()->flash('back', 'menu.menu.index');
            return view('dashboard.shared.universal-info');
        }
    }

}
