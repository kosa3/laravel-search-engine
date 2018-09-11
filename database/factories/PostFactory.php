<?php

use App\Models\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'user_id' => factory(User::class)->create()->id,
        'content' => $faker->text,
        'is_public' => $faker->boolean,
    ];
});