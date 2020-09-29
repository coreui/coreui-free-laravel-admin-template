<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $statuses = DB::table('status')->get();
        $statusIds = array();
        foreach($statuses as $status){
            array_push($statusIds, $status->id);
        }
        for($i=0; $i<25; $i++){
            DB::table('example')->insert([
                'name'          => $faker->sentence(4,true),
                'description'   => $faker->paragraph(1,true),
                'status_id'     => $statusIds[random_int(0,count($statusIds) - 1)],
            ]);
        }
    }
}
