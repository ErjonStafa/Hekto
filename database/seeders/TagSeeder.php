<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag_name'=>'Chair'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Crafted'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Sofa'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Watch'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Plastic'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Wood'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Leather'
        ]);
    }
}
