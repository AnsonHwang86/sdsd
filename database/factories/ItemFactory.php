<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->defineAs(App\Item::class, "default", function (Faker\Generator $faker) {
    //static $password;

    return [
        'title' => $faker->text(100),
        'description' => $faker->text
    ];
});
