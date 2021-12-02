<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => 1,
            'category_id' => 1,
            'title' => "Title 1"
        ]);
        DB::table('books')->insert([
            'id' => 2,
            'category_id' => 1,
            'title' => "Title 2"
        ]);
        DB::table('books')->insert([
            'id' => 3,
            'category_id' => 1,
            'title' => "Title 3"
        ]);
        DB::table('books')->insert([
            'id' => 4,
            'category_id' => 1,
            'title' => "Title 4"
        ]);
        DB::table('books')->insert([
            'id' => 5,
            'category_id' => 2,
            'title' => "Title 5"
        ]);
        DB::table('books')->insert([
            'id' => 6,
            'category_id' => 2,
            'title' => "Title 6"
        ]);
        DB::table('books')->insert([
            'id' => 7,
            'category_id' => 2,
            'title' => "Title 7"
        ]);
        DB::table('books')->insert([
            'id' => 8,
            'category_id' => 3,
            'title' => "Title 8"
        ]);
        DB::table('books')->insert([
            'id' => 9,
            'category_id' => 3,
            'title' => "Title 9"
        ]);
        DB::table('books')->insert([
            'id' => 10,
            'category_id' => 3,
            'title' => "Title 10"
        ]);
    }
}
