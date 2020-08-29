<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title     = $faker->unique()
                       ->sentence(5)
    ;
    $slug      = Str::slug($title);
    $image     = $faker->image();
    $imageFile = new File($image);

    return [
        'category_id'    => Category::all()
                                    ->random()->id,
        'user_id'        => 1,
        'title'          => $title,
        'slug'           => $slug,
        'content'        => $faker->paragraph(5),
        'featured_image' => Storage::disk('public')
                                   ->putFile('images', $imageFile),//$faker->image('storage/images', 400, 300, null, false),
        'is_featured'    => $faker->boolean(15),
        'is_published'   => true,
    ];
});
