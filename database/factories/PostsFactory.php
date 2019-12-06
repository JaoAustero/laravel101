<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'category_id' => $faker->numberBetween(1, 3),
        'body' => $faker->realText($faker->numberBetween(10, 25)),
        'is_active' => 1,
        'created_at' => now(),
        'created_by' => 1,
    ];
});
