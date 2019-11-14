<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Menus\GetSidebarMenu;

class GetMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            $roles =  Auth::user()->roles;
        }else{
            $roles = '';
        }
        $menus = new GetSidebarMenu();
        view()->share('menu', $menus->get( $roles ) );
        return $next($request);
    }
}