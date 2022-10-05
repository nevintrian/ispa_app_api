<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disease::create([
            'name' => 'Batuk Bukan Pneumonia',
        ]);

        Disease::create([
            'name' => 'Pneumonia',
        ]);

        Disease::create([
            'name' => 'Pneumonia Berat',
        ]);
    }
}
