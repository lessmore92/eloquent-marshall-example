<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')
          ->insert([
              'name'        => 'News',
              'slug'        => 'news',
              'description' => 'Latest news from around the world.',
          ])
        ;

        DB::table('categories')
          ->insert([
              'name'        => 'Development',
              'slug'        => 'development',
              'description' => 'New articles about development and new technologies',
          ])
        ;

        DB::table('categories')
          ->insert([
              'name'        => 'Laravel',
              'slug'        => 'laravel',
              'description' => 'Laravel framework posts',
          ])
        ;

        DB::table('categories')
          ->insert([
              'name'        => 'Tutorials',
              'slug'        => 'tutorials',
              'description' => 'Interested in learning more about PHP? This section features tutorials on everything from getting started with PHP, to expert topics, and everything in between.',
          ])
        ;

        DB::table('categories')
          ->insert([
              'name'        => 'Packages',
              'slug'        => 'packages',
              'description' => '',
          ])
        ;
    }
}
