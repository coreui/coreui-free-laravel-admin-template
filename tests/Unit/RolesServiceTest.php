<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;
use App\Services\RolesService;
use App\Models\RoleHierarchy;
use App\Models\Menurole;
use App\Models\User;

class RolesServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function testRolesService(){
        Role::create(['name' => 'test1']);
        Role::create(['name' => 'test2']);
        $expected = [
            'test1', 'test2'
        ];
        $result = RolesService::get();
        $this->assertSame($expected, $result);
    }

    public function testRolesIndex(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        Role::create(['name' => 'xyzabc']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->get('/roles');
        $response->assertSee('admin');
        $response->assertSee('xyzabc');
    }

    public function testRolesCreate(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->get('/roles/create');
        $response->assertSee('Create new role');
    }

    public function testRolesStore(){
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->post('/roles', ['name' => 'xyzxyz']);
        $this->assertDatabaseHas('roles',['name'=> 'xyzxyz']);
        $role = Role::where('name', '=', 'xyzxyz')->first(); 
        $this->assertDatabaseHas('role_hierarchy',['role_id' => $role->id]);
    }

    public function testRolesEdit(){
        $user = User::factory()->admin()->create();
        $id = Role::create(['name' => 'admin']);
        $rh = new RoleHierarchy();
        $rh->role_id = $id->id;
        $rh->hierarchy = 1;
        $rh->save();
        $user->assignRole($id);
        $response = $this->actingAs($user)->get('/roles/' . $id->id . '/edit');
        $response->assertSee('Edit role');
        $response->assertSee('admin');
    }

    public function testRolesUpdate(){
        $user = User::factory()->admin()->create();
        $id = Role::create(['name' => 'admin']);
        $rh = new RoleHierarchy();
        $rh->role_id = $id->id;
        $rh->hierarchy = 1;
        $rh->save();
        $user->assignRole($id);
        $response = $this->actingAs($user)->post('/roles/' . $id->id, ['name' => 'abcdef', '_method' => 'PUT']);
        $this->assertDatabaseHas('roles',['id' => $id->id, 'name'=> 'abcdef']);
    }

    public function testRolesDestroy(){
        $user = User::factory()->admin()->create();
        $id = Role::create(['name' => 'admin']);
        $rh = new RoleHierarchy();
        $rh->role_id = $id->id;
        $rh->hierarchy = 1;
        $rh->save();
        $user->assignRole($id);
        $this->assertDatabaseHas('roles',['id' => $id->id, 'name' => 'admin']);
        $this->assertDatabaseHas('role_hierarchy',['role_id' => $id->id]);
        $response = $this->actingAs($user)->post('/roles/' . $id->id, ['id' => $id->id, '_method' => 'DELETE']);
        $response->assertSee('Successfully deleted role');
        $this->assertDatabaseMissing('roles',['id' => $id->id, 'name' => 'admin']);
        $this->assertDatabaseMissing('role_hierarchy',['role_id' => $id->id]);
    }

    public function testRolesNotDestroy(){
        $user = User::factory()->admin()->create();
        $id = Role::create(['name' => 'admin']);
        $rh = new RoleHierarchy();
        $rh->role_id = $id->id;
        $rh->hierarchy = 1;
        $rh->save();
        $menuRole = new Menurole();
        $menuRole->role_name = 'admin';
        $menuRole->menus_id = 1;
        $menuRole->save();
        $user->assignRole($id);
        $this->assertDatabaseHas('roles',['id' => $id->id, 'name' => 'admin']);
        $this->assertDatabaseHas('role_hierarchy',['role_id' => $id->id]);
        $response = $this->actingAs($user)->post('/roles/' . $id->id, ['id' => $id->id, '_method' => 'DELETE']);
        $response->assertSee("Role has assigned one or more menu elements.");
        $this->assertDatabaseHas('roles',['id' => $id->id, 'name' => 'admin']);
        $this->assertDatabaseHas('role_hierarchy',['role_id' => $id->id]);
    }

    public function testRolesMoveUp(){
        $user = User::factory()->admin()->create();
        $idRoleOne = Role::create(['name' => 'admin']);
        $idRoleTwo = Role::create(['name' => 'xyzabc']);
        $rh = new RoleHierarchy();
        $rh->role_id = $idRoleOne->id;
        $rh->hierarchy = 1;
        $rh->save();
        $rh = new RoleHierarchy();
        $rh->role_id = $idRoleTwo->id;
        $rh->hierarchy = 2;
        $rh->save();
        $user->assignRole($idRoleOne);
        $response = $this->actingAs($user)->get('/roles/move/move-up?id=' . $idRoleTwo->id );
        $this->assertDatabaseHas('role_hierarchy',['role_id' => $idRoleTwo->id, 'hierarchy' => 1 ]);
        $this->assertDatabaseHas('role_hierarchy',['role_id' => $idRoleOne->id, 'hierarchy' => 2 ]);
    }

    public function testRolesMoveDown(){
        $user = User::factory()->admin()->create();
        $idRoleOne = Role::create(['name' => 'admin']);
        $idRoleTwo = Role::create(['name' => 'xyzabc']);
        $rh = new RoleHierarchy();
        $rh->role_id = $idRoleOne->id;
        $rh->hierarchy = 1;
        $rh->save();
        $rh = new RoleHierarchy();
        $rh->role_id = $idRoleTwo->id;
        $rh->hierarchy = 2;
        $rh->save();
        $user->assignRole($idRoleOne);
        $response = $this->actingAs($user)->get('/roles/move/move-down?id=' . $idRoleOne->id );
        $this->assertDatabaseHas('role_hierarchy',['role_id' => $idRoleTwo->id, 'hierarchy' => 1 ]);
        $this->assertDatabaseHas('role_hierarchy',['role_id' => $idRoleOne->id, 'hierarchy' => 2 ]);
    }
}