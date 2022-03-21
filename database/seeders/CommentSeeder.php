<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id'=> 1,
            'post_id'=>'2',
            'comment' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent turpis nisl, tincidunt et luctus a, ornare ac turpis. Integer tristique egestas volutpat.',
        ]);
        DB::table('comments')->insert([
            'user_id'=> 1,
            'post_id'=>'2',
            'comment' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent turpis nisl, tincidunt et luctus a, ornare ac turpis. Integer tristique egestas volutpat.',
        ]);
        DB::table('comments')->insert([
            'user_id'=> 1,
            'post_id'=>'3',
            'comment' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent turpis nisl, tincidunt et luctus a, ornare ac turpis. Integer tristique egestas volutpat.',
        ]);
        DB::table('comments')->insert([
            'user_id'=> 1,
            'post_id'=>'6',
            'comment' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent turpis nisl, tincidunt et luctus a, ornare ac turpis. Integer tristique egestas volutpat.',
        ]);
        DB::table('comments')->insert([
            'user_id'=> 1,
            'post_id'=>'5',
            'comment' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent turpis nisl, tincidunt et luctus a, ornare ac turpis. Integer tristique egestas volutpat.',
        ]);
    }
}
