<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @return void
     */
    public function testCanReadListOfUsers()
    {
        $userOne = factory('App\User')->create();
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
        $userOne = factory('App\User')->create();
        $userTwo = factory('App\User')->create();
        $response = $this->actingAs($userOne)->get('/users/' . $userTwo->id );
        $response->assertSee($userTwo->name)->assertSee($userTwo->email);
    }

    /**
     * @return void
     */
    public function testCanOpenUserEdition()
    {
        $user = factory('App\User')->create();
        $response = $this->actingAs($user)->get('/users/'.$user->id . '/edit', $user->toArray());
        $response->assertSee($user->name)->assertSee($user->email);
    }

    /**
     * @return void
     */
    public function testCanEditUser()
    {
        $user = factory('App\User')->create();
        $user->name = 'Updated name';
        $user->email = 'updated@email.com';
        $this->actingAs($user)->put('/users/'.$user->id, $user->toArray());
        $this->assertDatabaseHas('users',['id'=> $user->id , 'name' => 'Updated name', 'email' => 'updated@email.com']);
    }

    /**
     * @return void
     */
    public function testCanDeleteUser()
    {
        $user = factory('App\User')->create();
        $this->actingAs( $user );
        $this->delete('/users/'.$user->id);
        $this->assertDatabaseMissing('users',['id'=> $user->id]);
    }
}
