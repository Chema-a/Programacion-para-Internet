<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(['birthday'=>'2005-02-20', 'user_id'=>'1' , 'condition' => 'TDAH']);
        Student::create(['birthday'=>'2010-11-11', 'user_id'=>'3', 'condition' => 'Autismo']);
    }
}
