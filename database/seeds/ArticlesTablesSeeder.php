<?php

use Illuminate\Database\Seeder;

class ArticlesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
        	'title' => 'artikel pertama',
        	'content' => 'Biografi',
        	'featured-imaged' => 'syalwa123'
        ]);
        }
}
