<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->registerPermissions();
    }

    /**
     * @return void
     */
    public function testRegularUserCantSeeListOfUsers(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/users');
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testRegularUserCantSeeSingleUser(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/users/' . $user->id );
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testRegularUserCantOpenEditUserForm(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/users/'.$user->id . '/edit');
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testRegularUserCantEditUser(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->put('/users/'.$user->id, $user->toArray());
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testRegularUserCantDeleteUser(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->delete('/users/'.$user->id);
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testCanReadListOfUsers()
    {
        $userOne = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $userOne->assignRole($adminRole);
        $userTwo = User::factory()->create();
        $response = $this->actingAs($userOne)->get('/users');
        $response->assertSee($userOne->name)
        ->assertSee($userOne->email)
        ->assertSee($userTwo->name)
        ->assertSee($userTwo->email);
    }

    /**
     * @return void
     */
    public function testCanReadSingleUsers()
    {
        $userOne = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $userOne->assignRole($adminRole);
        $userTwo = User::factory()->create();
        $response = $this->actingAs($userOne)->get('/users/' . $userTwo->id );
        $response->assertSee($userTwo->name)->assertSee($userTwo->email);
    }

    /**
     * @return void
     */
    public function testCanOpenUserEdition()
    {
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $response = $this->actingAs($user)->get('/users/'.$user->id . '/edit');
        $response->assertSee($user->name)->assertSee($user->email);
    }

    /**
     * @return void
     */
    public function testCanEditUser()
    {
        $user = User::factory()->admin()->create();
        $user->name = 'Updated name';
        $user->email = 'updated@email.com';
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $this->actingAs($user)->put('/users/'.$user->id, $user->toArray());
        $this->assertDatabaseHas('users',['id'=> $user->id , 'name' => 'Updated name', 'email' => 'updated@email.com']);
    }

    /**
     * @return void
     */
    public function testCanDeleteUser()
    {
        $user = User::factory()->admin()->create();
        $adminRole = Role::create(['name' => 'admin']);
        $user->assignRole($adminRole);
        $this->actingAs( $user );
        $this->delete('/users/'.$user->id);
        $this->assertSoftDeleted('users',['id'=> $user->id]);
    }
}
