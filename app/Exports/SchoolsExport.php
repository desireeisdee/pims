<?php

namespace App\Exports;

use App\Models\School;
use Maatwebsite\Excel\Concerns\FromCollection;

class SchoolsExport implements FromCollection
{
    public function collection()
    {
        return School::all();
    }
}
