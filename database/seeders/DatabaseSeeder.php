<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutDisease;
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
        $this->call(UserSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(DiseaseSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(AboutAppSeeder::class);
        $this->call(AboutDiseaseSeeder::class);
    }
}
