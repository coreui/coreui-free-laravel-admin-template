<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menurole;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Menurole::class, function (Faker $faker) {
    return [     
        'role_name' => 'guest',
        'menus_id'  => factory(App\Menus::class)->create()->id,
    ];
});