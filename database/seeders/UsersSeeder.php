<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Juan Sebastian','type'=>'1','email' => 'test6031@gmail.com', 'registrator_code'=>'13AbT','password' => Hash::make('password'),'remember_token' => Str::random(10), 'first_login' => 0]);
        User::create(['name'=>'Ignacio Sanchez','type'=>'2','email' => 'test2031@gmail.com', 'registrator_code'=>'paPfT','password' => Hash::make('password'),'remember_token' => Str::random(10), 'first_login' => 0]);
        User::create(['name'=>'Ana Calderon','type'=>'1','email' => 'test5031@gmail.com', 'registrator_code'=>'12AbE', 'password' => Hash::make('password'),'remember_token' => Str::random(10), 'first_login' => 0]);
        User::create(['name'=>'Jose Maria','type'=>'2','email' => 'test9031@gmail.com', 'registrator_code'=>'15AbT','password' => Hash::make('password'),'remember_token' => Str::random(10), 'first_login' => 0]);
        User::create(['name'=>'Jose Emmanuel','type'=>'3','email' => 'admin9031@gmail.com', 'registrator_code'=>'admin','password' => Hash::make('password'),'remember_token' => Str::random(10), 'first_login' => 0]);
    }
}
