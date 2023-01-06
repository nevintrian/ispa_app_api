<?php

namespace App\Imports;

use App\Models\Disease;
use App\Models\Patient;
use App\Models\Test;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PatientImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $count = 0;
        foreach ($rows as $row) {
            $count++;
            if ($count != 1) {
                $age = $row[2];
                preg_match_all('!\d+!', $age, $age_result);
                $disease_id = Disease::where('name', $row[14])->first()->id;

                if (($count > 1 && $count < 7) || ($count > 15 && $count < 21) || ($count > 67 && $count < 73)) {
                    Test::create([
                        'name' => $row[1],
                        'gender' => $row[3] == 'P' ? 'Perempuan' : 'Laki-laki',
                        'age_year' => $age_result[0][0],
                        'age_month' => $age_result[0][1] ?? 0,
                        'x1' => $row[4] == 'Ya' ? 1 : 0,
                        'x2' => $row[5] == 'Ya' ? 0 : 1,
                        'x3' => $row[7] == 'Ya' ? 1 : 0,
                        'x4' => $row[8] == 'Ya' ? 1 : 0,
                        'x5' => $row[9] == 'Ya' ? 1 : 0,
                        'x6' => $row[10] == 'Ya' ? 1 : 0,
                        'x7' => $row[11] == 'Ya' ? 1 : 0,
                        'x8' => $row[12] == 'Ya' ? 1 : 0,
                        'x9' => $row[13] == 'Ya' ? 1 : 0,
                        'label_from_disease_id' => $disease_id,
                        'result_from_disease_id' => 1,
                        'is_correct' => 0
                    ]);
                } else {
                    Patient::create([
                        'name' => $row[1],
                        'gender' => $row[3] == 'P' ? 'Perempuan' : 'Laki-laki',
                        'age_year' => $age_result[0][0],
                        'age_month' => $age_result[0][1] ?? 0,
                        'x1' => $row[4] == 'Ya' ? 1 : 0,
                        'x2' => $row[5] == 'Ya' ? 1 : 0,
                        'x3' => $row[7] == 'Ya' ? 1 : 0,
                        'x4' => $row[8] == 'Ya' ? 1 : 0,
                        'x5' => $row[9] == 'Ya' ? 1 : 0,
                        'x6' => $row[10] == 'Ya' ? 1 : 0,
                        'x7' => $row[11] == 'Ya' ? 1 : 0,
                        'x8' => $row[12] == 'Ya' ? 1 : 0,
                        'x9' => $row[13] == 'Ya' ? 1 : 0,
                        'label_from_disease_id' => $disease_id
                    ]);
                }
            }
        }
    }
}
