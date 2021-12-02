<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'category' => "Science"
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'category' => "Fiction"
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'category' => "Computer"
        ]);
    }
}
