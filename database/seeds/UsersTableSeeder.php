<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(8),
            'email' => str_random(8).'@gmail.com',
            'password' => bcrypt('rahasia'),
            'role_id' => '1',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'name' => str_random(8),
            'email' => str_random(8).'@gmail.com',
            'password' => bcrypt('rahasia'),
            'role_id' => '2',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'name' => str_random(8),
            'email' => str_random(8).'@gmail.com',
            'password' => bcrypt('rahasia'),
            'role_id' => '3',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);
    }
}
