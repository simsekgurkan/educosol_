<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name1 = 'Event 1';
        $name2 = 'Event 2';
        DB::table('events')->insert([
            'name'=>$name1,
            'slug'=>Str::slug($name1),
            'image'=>'Admin/assets/img/news-3.jpg',
            'description'=>'Lorem lorem lorem',
            'date' => date('Y-m-d H:i')
        ]);
        DB::table('events')->insert([
            'name'=>$name2,
            'slug'=>Str::slug($name2),
            'image'=>'Admin/assets/img/news-4.jpg',
            'description'=>'Lorem lorem lorem dasdsadas',
            'date' => date('Y-m-d H:i')
        ]);
    }
}

