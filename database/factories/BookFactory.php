<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, false),
        'author' => $faker->name,
        'category' => $faker->word,
        'piece' => $faker->numberBetween( 0, 20)
    ];
});
