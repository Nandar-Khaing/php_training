<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Student::select('id', 'name', 'email', 'address', 'ph_no', 'age', 'major_id')->get();
    }
    public function headings(): array
    {
        return ['ID', 'NAME', 'EMAIL', 'ADDRESS', 'PH_NO', 'AGE', 'MAJOR_ID'];
    }
}
