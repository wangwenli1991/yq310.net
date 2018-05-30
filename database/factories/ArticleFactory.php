<?php

use Faker\Generator as Faker;


$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title'=>'title',
        'body'=>'body',
        'description'=>'description',
        'category_id'=>'1',
        'image_url'=>'/img/default.png',
        'author_id'=>'1',
        'author'=>'admin',

    ];
});
