<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(['name'=>'Danza', 'available_places'=>'20']);
        Subject::create(['name'=>'Pintura ', 'available_places'=>'10']);
        Subject::create(['name'=>'Terapia creativa', 'available_places'=>'10']);
        Subject::create(['name'=>'Ballet', 'available_places'=>'15']);
        Subject::create(['name'=>'Artes y música', 'available_places'=>'16']);
    }
}
