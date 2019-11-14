<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EditMenuViewService;
use App\Menurole;

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

    /**
     * Display a listing of roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = explode(',', env("APP_ROLES", 'guest,user,admin'));
        return view('coreui.menu.selectRole', array('roles' => $roles));
    }

    public function menuSelected(Request $request){
        $sidebar = new EditMenuViewService();
        return view('coreui.menu.menuSelected', array(
            'role' => $request->input('role'),
            'menuToEdit' => $sidebar->getDataForView($request->input('role')),
        ));
    }

    public function switch(Request $request){
        $menuRole = Menurole::where('role_name', '=', $request->input('role'))
        ->where('menus_id', '=', $request->input('id'))
        ->first();
        if($menuRole){
            $menuRole->delete();
        }else{
            $menuRole = new Menurole();
            $menuRole->role_name = $request->input('role');
            $menuRole->menus_id = $request->input('id');
            $menuRole->save();
        }
        return redirect()->route('menu.selected', array('role' => $request->input('role')));
    }
}
