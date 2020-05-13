<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;
use App\Models\Menulist;
use App\Models\Menus;
use App\Models\Menurole;

class MenuElementTest extends TestCase
{
    use DatabaseMigrations;

    public function testMenuElementsIndex(){
        $user = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $menulist = new Menulist();
        $menulist->name = 'test3';
        $menulist->save();
        $response = $this->actingAs($user)->get('/menu/element?menu=2');
        $response->assertSee('<option value="1">test2</option>', false);
        $response->assertSee('<option value="2" selected>test3</option>', false);
        $response->assertSee('Menu Elements');
    }

    public function testMenuCreate(){
        $user = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $response = $this->actingAs($user)->get('/menu/element/create');
        $response->assertSee('<option value="1">test2</option>', false);
        $response->assertSee('<input type="checkbox" name="role[]" value="admin" class="form-control"/>', false);
        $response->assertSee('Create menu element');
    }

    public function testMenuStore(){
        $user = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $postArray = [
            'menu' => '1',
            'role' => [
                'admin'
            ],
            'name' => 'test2',
            'type' => 'link',
            'href' => 'test3',
            'parent' => '1',
            'icon' => 'test4', 
        ];
        $response = $this->actingAs($user)->post('/menu/element/store', $postArray);
        $this->assertDatabaseHas('menu_role',[
            'role_name' => 'admin',
            'menus_id' => 1,
        ]);
        $this->assertDatabaseHas('menus',[
            'slug' => 'link',
            'menu_id' => 1,
            'name' => 'test2',
            'icon' => 'test4',
            'href' => 'test3',
            'parent_id' => 1,
            'sequence' => 1,
        ]);
    }

    public function testMenuEdit(){
        $user = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $menus = new Menus();
        $menus->slug = 'link';
        $menus->menu_id = 1;
        $menus->name = 'test2';
        $menus->icon = 'test4';
        $menus->href = 'test3';
        $menus->parent_id = 1;
        $menus->sequence = 1;
        $menus->save();
        $response = $this->actingAs($user)->get('/menu/element/edit?id=1' );
        $response->assertSee('<option value="1" selected>test2</option>', false);
        $response->assertSee('<input type="checkbox" name="role[]" value="admin" class="form-control"/>', false);
        $response->assertSee('test2');
        $response->assertSee('test4');
        $response->assertSee('test3');
        $response->assertSee('Edit menu element');
    }

    public function testMenuUpdate(){
        $user = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $menulist = new Menulist();
        $menulist->name = 'test2';
        $menulist->save();
        $menus = new Menus();
        $menus->slug = 'link';
        $menus->menu_id = 1;
        $menus->name = 'test2';
        $menus->icon = 'test4';
        $menus->href = 'test3';
        $menus->parent_id = 1;
        $menus->sequence = 1;
        $menus->save();
        $postArray = [
            'id' => '1',
            'menu' => '1',
            'role' => [
                'admin'
            ],
            'name' => 'test22',
            'type' => 'link',
            'href' => 'test33',
            'parent' => '2',
            'icon' => 'test44', 
        ];
        $this->assertDatabaseHas('menus',[
            'slug' => 'link',
            'menu_id' => 1,
            'name' => 'test2',
            'icon' => 'test4',
            'href' => 'test3',
            'parent_id' => 1,
            'sequence' => 1,
        ]);
        $response = $this->actingAs($user)->post('/menu/element/update', $postArray);
        $this->assertDatabaseHas('menu_role',[
            'role_name' => 'admin',
            'menus_id' => 1,
        ]);
        $this->assertDatabaseHas('menus',[
            'slug' => 'link',
            'menu_id' => 1,
            'name' => 'test22',
            'icon' => 'test44',
            'href' => 'test33',
            'parent_id' => 2,
            'sequence' => 1,
        ]);
    }

    public function testMenuDelete(){
        $user = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $menus = new Menus();
        $menus->slug = 'link';
        $menus->menu_id = 1;
        $menus->name = 'test2';
        $menus->icon = 'test4';
        $menus->href = 'test3';
        $menus->parent_id = 1;
        $menus->sequence = 1;
        $menus->save();
        $menuRole = new Menurole();
        $menuRole->role_name = 'admin';
        $menuRole->menus_id = $menus->id;
        $menuRole->save();
        $this->assertDatabaseHas('menus',['id' => $menus->id]);
        $response = $this->actingAs($user)->get('/menu/element/delete?id=' . $menus->id);
        $this->assertDatabaseMissing('menus',['id' => $menus->id]);
        $this->assertDatabaseMissing('menu_role',['menus_id' => $menus->id]);
    }
}