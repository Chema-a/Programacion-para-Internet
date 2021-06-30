<?php

namespace Database\Seeders;

use App\Models\Registrator;
use Illuminate\Database\Seeder;

class RegistratorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Registrator::factory(10)->create();

        Registrator::create(['email' => 'test5031@gmail.com', 'code'=>'12AbE']);
        Registrator::create(['email' => 'test2031@gmail.com', 'code'=>'paPfT']);
        Registrator::create(['email' => 'test6031@gmail.com', 'code'=>'13AbT']);
    }
}
