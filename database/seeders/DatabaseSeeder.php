<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use database\seeds\UsersAndNotesSeeder;
//use database\seeds\MenusTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(MenusTableSeeder::class);
        //$this->call(UsersAndNotesSeeder::class);
        /*
        $this->call('UsersAndNotesSeeder');
        $this->call('MenusTableSeeder');
        $this->call('FolderTableSeeder');
        $this->call('ExampleSeeder');
        $this->call('BREADSeeder');
        $this->call('EmailSeeder');
        */

        $this->call([
            UsersAndNotesSeeder::class,
            MenusTableSeeder::class,
            FolderTableSeeder::class,
            ExampleSeeder::class,
            BREADSeeder::class,
            EmailSeeder::class,
        ]);
    }
}
