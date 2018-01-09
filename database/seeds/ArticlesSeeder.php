<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'post title',
            'description' => 'some description',
            'image' => str_random(11),
            'category_id' => '1',
            'author' => '1',
        ]);
    }
}
