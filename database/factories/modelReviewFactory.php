<?php

use App\model\product;

use Faker\Generator as Faker;


$factory->define(App\model\Review::class, function (Faker $faker) {
    return [

        'product_id'=>function(){

        return product::all()->random();

        },

        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(0,5)

    ];
});
