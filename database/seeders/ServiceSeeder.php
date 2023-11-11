<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name'=>'Web Development',
            'about'=>'Lorem LOREM',
            'image'=>'Admin/uploads/course-1.jpg',
            'about'=>'Lorem lorem lorem',
            'keyword'=>'Web Management',
        ]);
        DB::table('services')->insert([
            'name'=>'Product Management',
            'about'=>'Lorem LOREM',
            'image'=>'Admin/uploads/course-2.jpg',
            'about'=>'Lorem lorem lorem',
            'keyword'=>'Product Management',
        ]);


    }
}

