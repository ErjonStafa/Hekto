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
            'tag_name'=>'Gossip'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Clothes'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Feelings'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Traveling'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Shopping'
        ]);
        DB::table('tags')->insert([
            'tag_name'=>'Furniture'
        ]);
    }
}
