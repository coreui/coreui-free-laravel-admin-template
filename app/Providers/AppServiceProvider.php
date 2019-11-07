<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Auth;
use App\Http\Menus\Menus;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            /*
            if (Auth::check()){
                $roles = explode(',', Auth::user()->roles);
            }else{
                $roles = array();
            }
            view()->share('roles', $roles);
            */

            if (Auth::check()){
                $roles =  Auth::user()->roles;
            }else{
                $roles = '';
            }
            $menus = new Menus();
            view()->share('menu', $menus->get( $roles ) );

        });

    }
}
