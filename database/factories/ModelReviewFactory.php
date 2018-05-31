<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'product'=> function(){
            return Product::all()->random();
        },
        'customer'  => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0,5),

    ];
});
