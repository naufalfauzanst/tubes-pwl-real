<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */
    public function run(): void
    {
        DB::table('posts')->insert([
            'name' => 'farhan',
            'email' => 'farhan@gmail.com',
            'password' => '123456'
        ]);
    }
    
}