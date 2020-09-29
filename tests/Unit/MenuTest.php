<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;
use App\Models\Menulist;
use App\Models\User;

class MenuTest extends TestCase
{
    use DatabaseMigrations;


    public function testMenuIndex(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $response = $this->actingAs($user)->get('/menu/menu');
        $response->assertSee('test2');
        $response->assertSee('<a class="btn btn-primary" href="'.env('APP_URL', 'http://localhost:8000').'/menu/element?menu=1">Show</a>', false);
        $response->assertSee('Add new menu');
        $response->assertSee('Menus list');
    }

    public function testMenuCreate(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->get('/menu/menu/create');
        $response->assertSee('Create menu');
    }

    public function testMenuStore(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->post('/menu/menu/store',  ['name' => 'test3']);
        $this->assertDatabaseHas('menulist',['name' => 'test3']);
    }

    public function testMenuEdit(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $response = $this->actingAs($user)->get('/menu/menu/edit',  ['id' => $menulist->id]);
        $response->assertSee('test2');
    }

    public function testMenuUpdate(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $this->assertDatabaseHas('menulist',['name' => 'test2']);
        $response = $this->actingAs($user)->post('/menu/menu/update',  ['id' => $menulist->id, 'name' => 'test3']);
        $this->assertDatabaseHas('menulist',['name' => 'test3']);
    }

    public function testMenuDelete(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $this->assertDatabaseHas('menulist',['name' => 'test2']);
        $response = $this->actingAs($user)->get('/menu/menu/delete?id=' . $menulist->id);
        $response->assertStatus(200);
        $this->assertDatabaseMissing('menulist',['name' => 'test2']);
    }

    /*
        Testing: Route::get('menu', 'MenuController@index');
    */
    /*
    public function testEditMenu(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->get('/menu');
        $response->assertSee('<option>guest</option>');
        $response->assertSee('<option>user</option>');
        $response->assertSee('<option>admin</option>');
    }
    */
    /*
        Testing: Route::get('menu/selected', 'MenuController@menuSelected')->name('menu.selected');
    */
    /*
    public function testMenuSelected(){
        $menuElement = factory('App\Models\Menurole')->create();
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->get('menu/selected?role=guest');
        $response->assertSee('<a class="btn btn-primary" href="/menu/selected/switch?id=' . $menuElement->menus_id);
    }
    */
    /*
        Testing: Route::get('menu/selected/switch', 'MenuController@switch');
    */
    /*
    public function testMenuSwitch(){
        $menuElement = factory('App\Models\Menurole')->create();
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->get('menu/selected/switch?role=guest&id=' . $menuElement->menus_id);
        $this->assertDatabaseMissing('menu_role',['menus_id' => $menuElement->menus_id, 'role_name' => 'guest']);
        $response = $this->actingAs($user)->get('menu/selected/switch?role=guest&id=' . $menuElement->menus_id);
        $this->assertDatabaseHas('menu_role',['menus_id' => $menuElement->menus_id, 'role_name' => 'guest']);
    }
    */
}