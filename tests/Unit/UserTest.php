<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @return void
     */
    public function testRegularUserCantSeeListOfUsers(){
        $user = factory('App\User')->create();
        $response = $this->actingAs($user)->get('/users');
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testRegularUserCantSeeSingleUser(){
        $user = factory('App\User')->create();
        $response = $this->actingAs($user)->get('/users/' . $user->id );
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testRegularUserCantOpenEditUserForm(){
        $user = factory('App\User')->create();
        $response = $this->actingAs($user)->get('/users/'.$user->id . '/edit');
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testRegularUserCantEditUser(){
        $user = factory('App\User')->create();
        $response = $this->actingAs($user)->put('/users/'.$user->id, $user->toArray());
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testRegularUserCantDeleteUser(){
        $user = factory('App\User')->create();
        $response = $this->actingAs($user)->delete('/users/'.$user->id);
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testCanReadListOfUsers()
    {
        $userOne = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $userOne->assignRole('admin');
        $userTwo = factory('App\User')->create();
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
        $userOne = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $userOne->assignRole('admin');
        $userTwo = factory('App\User')->create();
        $response = $this->actingAs($userOne)->get('/users/' . $userTwo->id );
        $response->assertSee($userTwo->name)->assertSee($userTwo->email);
    }

    /**
     * @return void
     */
    public function testCanOpenUserEdition()
    {
        $user = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $response = $this->actingAs($user)->get('/users/'.$user->id . '/edit');
        $response->assertSee($user->name)->assertSee($user->email);
    }

    /**
     * @return void
     */
    public function testCanEditUser()
    {
        $user = factory('App\User')->states('admin')->create();
        $user->name = 'Updated name';
        $user->email = 'updated@email.com';
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $this->actingAs($user)->put('/users/'.$user->id, $user->toArray());
        $this->assertDatabaseHas('users',['id'=> $user->id , 'name' => 'Updated name', 'email' => 'updated@email.com']);
    }

    /**
     * @return void
     */
    public function testCanDeleteUser()
    {
        $user = factory('App\User')->states('admin')->create();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
        $this->actingAs( $user );
        $this->delete('/users/'.$user->id);
        $this->assertSoftDeleted('users',['id'=> $user->id]);
    }
}
