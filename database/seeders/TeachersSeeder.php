<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create(['city'=>'Monterrey ', 'user_id'=>'2']);
        Teacher::create(['city'=>'Ciudad de México ', 'user_id'=>'4']);
    }
}
