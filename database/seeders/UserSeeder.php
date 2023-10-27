<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'gurkan',
            'email'=>'gurkan@gurkan.com',
            'password'=>bcrypt(102030),
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
    }
}
