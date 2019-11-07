<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->paragraphs(rand(2,10), true),
        'id' => $faker->randomNumber(),
        'highlighted' => $faker->numberBetween($min=0, $max=1),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()

    ];
});
