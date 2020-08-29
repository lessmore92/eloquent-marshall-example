<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Post::class, 50)->create();

        $tags = App\Models\Tag::all();

        App\Models\Post::all()
                       ->each(function ($post) use ($tags) {
                           $post->tags()
                                ->attach($tags->random(rand(1, 3))
                                              ->pluck('id')
                                              ->toArray())
                           ;
                       })
        ;
    }
}
