<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=> 'farhan',
            'email' => 'farhan@gmail.com',
            'password' => 'farhan123',
            'username' => 'famsszz',
            'level'=> 'admin',
        ]);
    }
}
