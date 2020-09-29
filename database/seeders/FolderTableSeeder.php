<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FolderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Folders  */

        DB::table('folder')->insert([  /* without this folder, nothing works */
            'name' => 'root',
            'folder_id' => NULL,
        ]);
        $rootId = DB::getPdo()->lastInsertId();
        DB::table('folder')->insert([   /* without this folder, nothing works - only this folder have column `resource` = 1 */
            'name' => 'resource',
            'folder_id' => $rootId,
            'resource' => 1
        ]);
        DB::table('folder')->insert([
            'name' => 'documents',
            'folder_id' => $rootId,
        ]);
        DB::table('folder')->insert([
            'name' => 'graphics',
            'folder_id' => $rootId,
        ]);
        DB::table('folder')->insert([
            'name' => 'other',
            'folder_id' => $rootId,
        ]);
        $id = DB::getPdo()->lastInsertId();


    }
}
