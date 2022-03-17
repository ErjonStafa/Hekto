<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'emri' => 'Chair',
        ]);
        DB::table('kategori')->insert([
            'emri' => 'Watch',
        ]);
        DB::table('kategori')->insert([
            'emri' => 'Sofa',
        ]);
        DB::table('kategori')->insert([
            'emri' => 'Crafted',
            'parent_id' => '1'
        ]);
    }
}
