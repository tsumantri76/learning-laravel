<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'judul' => str_random(15),
            'desc'  => str_random(50),
            'user_id' => '1',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);

        DB::table('posts')->insert([
            'judul' => str_random(15),
            'desc'  => str_random(50),
            'user_id' => '2',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);

        DB::table('posts')->insert([
            'judul' => str_random(15),
            'desc'  => str_random(50),
            'user_id' => '2',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);

        DB::table('posts')->insert([
            'judul' => str_random(15),
            'desc'  => str_random(50),
            'user_id' => '2',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);
    }
}
