<?php

use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'categoria' => str_random(10),
        'valor' => $faker->randomNumber(4),
    ];
});
