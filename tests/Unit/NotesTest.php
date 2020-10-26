<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

use App\Models\User;
use App\Models\Notes;


class NotesTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @return void
     */
    public function testCanReadListOfNotes()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $noteList = Notes::factory()->count(2)->create();
        $response = $this->actingAs($user)->get('/notes');
        $response->assertSee($noteList[0]->title)
        ->assertSee($noteList[0]->content)
        ->assertSee($noteList[1]->title)
        ->assertSee($noteList[1]->content);
    }

    /**
     * @return void
     */
    public function testCanReadSingleNote()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $note = Notes::factory()->create();
        $response = $this->actingAs($user)->get('/notes/' . $note->id );
        $response->assertSee($note->title)->assertSee($note->content);
    }

    /**
     * @return void
     */
    public function testCanOpenNoteCreateForm()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $response = $this->actingAs($user)->get('/notes/create');
        $response->assertSee('Create Note');
    }

    /**
     * @return void
     */
    public function testCanCreateNewNote()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $note = Notes::factory()->create();
        $this->actingAs($user)->post('/notes',  $note->toArray());
        $this->assertDatabaseHas('notes',['title' => $note->title, 'content' => $note->content]);
    }

    /**
     * @return void
     */
    public function testCanOpenNoteEdition()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $note = Notes::factory()->create();
        $response = $this->actingAs($user)->get('/notes/'.$note->id . '/edit');
        $response->assertSee($note->title)->assertSee($note->content);
    }

    /**
     * @return void
     */
    public function testCanEditNote()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $note = Notes::factory()->create();
        $note->title = 'Updated title';
        $note->content = 'Updated content';
        $this->actingAs($user)->put('/notes/'.$note->id, $note->toArray());
        $this->assertDatabaseHas('notes',['id'=> $note->id , 'title' => 'Updated title', 'content' => 'Updated content']);
    }

    /**
     * @return void
     */
    public function testCanDeleteNote()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $note = Notes::factory()->create();
        $this->actingAs( $user );
        $this->delete('/notes/'.$note->id);
        $this->assertDatabaseMissing('notes',['id'=> $note->id]);
    }
}
