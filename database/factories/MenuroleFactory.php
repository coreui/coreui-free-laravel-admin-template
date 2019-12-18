<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menurole;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Menurole::class, function (Faker $faker) {
    return [     
        'role_name' => 'guest',
        'menus_id'  => factory(App\Models\Menus::class)->create()->id,
    ];
});