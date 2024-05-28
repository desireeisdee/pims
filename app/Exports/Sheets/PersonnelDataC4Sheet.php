<?php

namespace App\Exports\Sheets;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Carbon\Carbon;

class PersonnelDataC4Sheet
{
    protected $personnel;
    protected $worksheet;

    public function __construct($personnel, Spreadsheet $spreadsheet)
    {
        $this->personnel = $personnel;
        $this->personnel = $this->personnel[0];
        $this->worksheet = $spreadsheet->getSheet(3);
    }

    public function populateSheet()
    {
        if ($this->personnel->references) {
            $this->populateReferences();
        }
    }

    protected function populateReferences()
    {
        $worksheet = $this->worksheet;

        $startRow = 42;
        $endRow = 48;
        $currentRow = $startRow;

        foreach ($this->personnel->references as $reference) {
            $worksheet->setCellValue('A' . $currentRow, $reference->full_name);
            $worksheet->setCellValue('F' . $currentRow, $reference->address);
            $worksheet->setCellValue('G' . $currentRow, $reference->tel_no);
            $currentRow++;
        }
    }
}
