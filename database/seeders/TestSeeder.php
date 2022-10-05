<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create([
            'x1' => 0,
            'x2' => 0,
            'x3' => 0,
            'x4' => 0,
            'x5' => 0,
            'x6' => 0,
            'x7' => 0,
            'x8' => 0,
            'x9' => 0,
            'label_from_disease_id' => 3,
            'result_from_disease_id' => 3
        ]);

        Test::create([
            'x1' => 1,
            'x2' => 0,
            'x3' => 1,
            'x4' => 0,
            'x5' => 1,
            'x6' => 0,
            'x7' => 1,
            'x8' => 0,
            'x9' => 1,
            'label_from_disease_id' => 2,
            'result_from_disease_id' => 2
        ]);

        Test::create([
            'x1' => 1,
            'x2' => 1,
            'x3' => 1,
            'x4' => 1,
            'x5' => 1,
            'x6' => 1,
            'x7' => 1,
            'x8' => 1,
            'x9' => 1,
            'label_from_disease_id' => 1,
            'result_from_disease_id' => 1
        ]);
    }
}