<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'emri' => 'Cantilever Chair',
            'kodi' => 'Y523201',
            'img_slug' => '/Images/Featured/image 1.png',
            'cmimi'=>'42.00',
            'kategoria_id'=> '1',
            'sasia'=>'5',
        ]);
        DB::table('products')->insert([
            'emri' => 'Comfort Handy Craft',
            'kodi' => 'Y623201',
            'img_slug' => '/Images/Latest/image 3.png',
            'cmimi'=>'65.00',
            'kategoria_id'=> '1',
            'sasia'=>'10',
        ]);
        DB::table('products')->insert([
            'emri' => 'Executive Seat chair',
            'kodi' => 'Y723245',
            'img_slug' => '/Images/Trending/image 31.png',
            'cmimi'=>'32.00',
            'kategoria_id'=> '1',
            'sasia'=>'2',
        ]);
        DB::table('products')->insert([
            'emri' => 'Mini LWC chair',
            'kodi' => 'Y823763',
            'img_slug' => '/Images/Latest/image 1168.png',
            'cmimi'=>'56.00',
            'kategoria_id'=> '1',
            'sasia'=>'8',
        ]);
        DB::table('products')->insert([
            'emri' => 'Condimentum imperdiet',
            'kodi' => 'Y523274',
            'img_slug' => '/Images/All/image 9.png',
            'cmimi'=>'42.00',
            'kategoria_id'=> '1',
            'sasia'=>'4',
        ]);
        DB::table('products')->insert([
            'emri' => 'Fusce pellentesque',
            'kodi' => 'Y938472',
            'img_slug' => '/Images/All/unnamed 1.png',
            'cmimi'=>'30.00',
            'kategoria_id'=> '2',
            'sasia'=>'3',
        ]);
        DB::table('products')->insert([
            'emri' => 'Ultricies condimentum',
            'kodi' => 'Y431874',
            'img_slug' => '/Images/All/image 1165.png',
            'cmimi'=>'50.00',
            'kategoria_id'=> '3',
            'sasia'=>'7',
        ]);
        DB::table('products')->insert([
            'emri' => 'Comfort Handy Craft',
            'kodi' => 'Y493458',
            'img_slug' => '/Images/Latest/image 1166.png',
            'cmimi'=>'65.00',
            'kategoria_id'=> '3',
            'sasia'=>'14',
        ]);
    }
}
