<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nama_role' => 'admin',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);

        DB::table('roles')->insert([
            'nama_role' => 'kasir',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);

        DB::table('roles')->insert([
            'nama_role' => 'unit',
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);
    }
}
