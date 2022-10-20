<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class StudentImport implements ToModel, withHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'id' => $row['id'],
            'name' => $row['name'],
            'email' => $row['email'],
            'address' => $row['address'],
            'ph_no' => $row['ph_no'],
            'age' => $row['age'],
            'major_id' => $row['major_id'],
        ]);

    }
}
