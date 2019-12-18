<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Notes;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Notes::class, function (Faker $faker) {
    return [     
        'title'         => $faker->sentence(4,true),
        'content'       => $faker->paragraph(3,true),
        'status_id'     => factory(App\Models\Status::class)->create()->id,
        'note_type'     => $faker->word(),
        'applies_to_date' => $faker->date(),
        'users_id'      => factory(App\User::class)->create()->id
    ];
});
