<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuTest extends TestCase
{
    use DatabaseMigrations;

    /*
        Testing: Route::get('menu', 'MenuController@index');
    */
    public function testEditMenu(){
        $user = factory('App\User')->states('admin')->create();
        $response = $this->actingAs($user)->get('/menu');
        $response->assertSee('<option>guest</option>');
        $response->assertSee('<option>user</option>');
        $response->assertSee('<option>admin</option>');
    }

    /*
        Testing: Route::get('menu/selected', 'MenuController@menuSelected')->name('menu.selected');
    */
    public function testMenuSelected(){
        $menuElement = factory('App\Menurole')->create();
        $user = factory('App\User')->states('admin')->create();
        $response = $this->actingAs($user)->get('menu/selected?role=guest');
        $response->assertSee('<a class="btn btn-primary" href="/menu/selected/switch?id=' . $menuElement->menus_id);
    }

    /*
        Testing: Route::get('menu/selected/switch', 'MenuController@switch');
    */
    public function testMenuSwitch(){
        $menuElement = factory('App\Menurole')->create();
        $user = factory('App\User')->states('admin')->create();
        $response = $this->actingAs($user)->get('menu/selected/switch?role=guest&id=' . $menuElement->menus_id);
        $this->assertDatabaseMissing('menu_role',['menus_id' => $menuElement->menus_id, 'role_name' => 'guest']);
        $response = $this->actingAs($user)->get('menu/selected/switch?role=guest&id=' . $menuElement->menus_id);
        $this->assertDatabaseHas('menu_role',['menus_id' => $menuElement->menus_id, 'role_name' => 'guest']);
    }

}