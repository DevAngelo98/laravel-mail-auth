<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

// AGGIUNGERE MODEL
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker -> word,
        'body' => $faker -> sentence,
    ];
});
