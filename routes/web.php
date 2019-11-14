<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['get.menu']], function () {
    Route::get('/', function () {           return view('coreui.homepage'); });
    Route::get('/colors', function () {     return view('coreui.colors'); });
    Route::get('/typography', function () { return view('coreui.typography'); });
    Route::get('/charts', function () {     return view('coreui.charts'); });
    Route::get('/widgets', function () {    return view('coreui.widgets'); });
    Route::get('/404', function () {        return view('coreui.404'); });
    Route::get('/500', function () {        return view('coreui.500'); });
    Route::prefix('base')->group(function () {  
        Route::get('/breadcrumb', function(){   return view('coreui.base.breadcrumb'); });
        Route::get('/cards', function(){        return view('coreui.base.cards'); });
        Route::get('/carousel', function(){     return view('coreui.base.carousel'); });
        Route::get('/collapse', function(){     return view('coreui.base.collapse'); });

        Route::get('/forms', function(){        return view('coreui.base.forms'); });
        Route::get('/jumbotron', function(){    return view('coreui.base.jumbotron'); });
        Route::get('/list-group', function(){   return view('coreui.base.list-group'); });
        Route::get('/navs', function(){         return view('coreui.base.navs'); });

        Route::get('/pagination', function(){   return view('coreui.base.pagination'); });
        Route::get('/popovers', function(){     return view('coreui.base.popovers'); });
        Route::get('/progress', function(){     return view('coreui.base.progress'); });
        Route::get('/scrollspy', function(){    return view('coreui.base.scrollspy'); });

        Route::get('/switches', function(){     return view('coreui.base.switches'); });
        Route::get('/tables', function () {     return view('coreui.base.tables'); });
        Route::get('/tabs', function () {       return view('coreui.base.tabs'); });
        Route::get('/tooltips', function () {   return view('coreui.base.tooltips'); });
    });
    Route::prefix('buttons')->group(function () {  
        Route::get('/buttons', function(){          return view('coreui.buttons.buttons'); });
        Route::get('/button-group', function(){     return view('coreui.buttons.button-group'); });
        Route::get('/dropdowns', function(){        return view('coreui.buttons.dropdowns'); });
        Route::get('/brand-buttons', function(){    return view('coreui.buttons.brand-buttons'); });
    });
    Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/coreui-icons', function(){         return view('coreui.icons.coreui-icons'); });
        Route::get('/flags', function(){                return view('coreui.icons.flags'); });
        Route::get('/brands', function(){               return view('coreui.icons.brands'); });
    });
    Route::prefix('notifications')->group(function () {  
        Route::get('/alerts', function(){   return view('coreui.notifications.alerts'); });
        Route::get('/badge', function(){    return view('coreui.notifications.badge'); });
        Route::get('/modals', function(){   return view('coreui.notifications.modals'); });
    });
    Auth::routes();

    Route::resource('users', 'UsersController')->except( ['create', 'store'] );

    Route::resource('notes', 'NotesController');

    Route::get('menu', 'MenuController@index');
    Route::get('menu/selected', 'MenuController@menuSelected')->name('menu.selected');
    Route::get('menu/selected/switch', 'MenuController@switch');
});
