<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class NotesTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @return void
     */
    public function testCanReadListOfNotes()
    {
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $noteOne = factory('App\Models\Notes')->create();
        $noteTwo = factory('App\Models\Notes')->create();
        $response = $this->actingAs($user)->get('/notes');
        $response->assertSee($noteOne->title)
        ->assertSee($noteOne->content)
        ->assertSee($noteTwo->title)
        ->assertSee($noteTwo->content);
    }

    /**
     * @return void
     */
    public function testCanReadSingleNote()
    {
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $note = factory('App\Models\Notes')->create();
        $response = $this->actingAs($user)->get('/notes/' . $note->id );
        $response->assertSee($note->title)->assertSee($note->content);
    }

    /**
     * @return void
     */
    public function testCanOpenNoteCreateForm()
    {
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $note = factory('App\Models\Notes')->create();
        $response = $this->actingAs($user)->get('/notes/create');
        $response->assertSee('Create Note');
    }

    /**
     * @return void
     */
    public function testCanCreateNewNote()
    {
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $note = factory('App\Models\Notes')->create();
        $response = $this->actingAs($user)->post('/notes',  $note->toArray());
        $this->assertDatabaseHas('notes',['title' => $note->title, 'content' => $note->content]);
    }

    /**
     * @return void
     */
    public function testCanOpenNoteEdition()
    {
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $note = factory('App\Models\Notes')->create();
        $response = $this->actingAs($user)->get('/notes/'.$note->id . '/edit');
        $response->assertSee($note->title)->assertSee($note->content);
    }

    /**
     * @return void
     */
    public function testCanEditNote()
    {
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $note = factory('App\Models\Notes')->create();
        $note->title = 'Updated title';
        $note->content = 'Updated content';
        $this->actingAs($user)->put('/notes/'.$user->id, $note->toArray());
        $this->assertDatabaseHas('notes',['id'=> $note->id , 'title' => 'Updated title', 'content' => 'Updated content']);
    }

    /**
     * @return void
     */
    public function testCanDeleteNote()
    {
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $note = factory('App\Models\Notes')->create();
        $this->actingAs( $user );
        $this->delete('/notes/'.$note->id);
        $this->assertDatabaseMissing('notes',['id'=> $note->id]);
    }
}
