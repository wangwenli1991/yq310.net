<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //  
        'title'       => $faker->name,  
        'body'        => $faker->paragraph,  
        'description' => $faker->sentence,  
        'category_id' => function () {  
            return factory(App\Category::class)->create()->id;  
        },  
        'image_url'   => ' /img/default.jpg',  
        'author_id'   => function () {  
            return factory(App\User::class)->create()->id;  
        },  
        'author'      => function (array $article) {  
            return App\User::find($article['author_id'])->name;  
        },  
        'created_at'  => $time,  
        'updated_at'  => $time,  
    ];
});


