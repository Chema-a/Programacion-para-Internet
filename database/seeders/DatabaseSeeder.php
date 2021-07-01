<?php

namespace Database\Seeders;

use App\Models\Registrator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RegistratorsSeeder::class,
            SubjectsSeeder::class,
            UsersSeeder::class,
            TeachersSeeder::class,
            StudentsSeeder::class
        ]);
        
    }
}
