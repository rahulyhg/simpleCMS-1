<?php

use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_categories')->insert([
            [ 'name' => 'Laravel' ],
            [ 'name' => 'php' ],
            [ 'name' => 'mySql' ],
            [ 'name' => 'html/css' ],
        ]);
    }
}
