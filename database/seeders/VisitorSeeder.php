<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::create([
            'name' => 'Brian Vidyanjaya',
            'gender' => 'Laki laki',
            'age_year' => 13,
            'age_month' => 2,
            'x1' => 1,
            'x2' => 0,
            'x3' => 1,
            'x4' => 0,
            'x5' => 1,
            'x6' => 0,
            'x7' => 1,
            'x8' => 0,
            'x9' => 1,
            'result_from_disease_id' => 2,
        ]);
    }
}
