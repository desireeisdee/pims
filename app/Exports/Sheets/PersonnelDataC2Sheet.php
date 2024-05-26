<?php
namespace App\Exports\Sheets;

use App\Models\Personnel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PersonnelDataC2Sheet implements WithTitle, FromView, WithStyles
{
    public $personnel_id;

    public function __construct($id)
    {
        $this->personnel_id = $id;
    }

    public function title(): string
    {
        return 'C2';
    }

    public function view(): View
    {
        return view('export.pds-c2', [
            'personnel' => Personnel::findOrFail($this->personnel_id)
        ]);
    }

    public function styles(Worksheet $sheet)
    {
       // Set column widths
        $columnWidths = [
            'A' => 2.57, 'B' => 5.57, 'C' => 9, 'D' => 9.86, 'E' => 6.29,
            'F' => 12.14, 'G' => 6.14, 'H' => 6.14, 'I' => 16.86, 'J' => 7.71,
            'K' => 8.57, 'L' => 10.43, 'M' => 7.29,
        ];

        foreach ($columnWidths as $column => $width) {
            $sheet->getColumnDimension($column)->setWidth($width);
        }

        // Set row heights
        $rowHeights = [
            1 => 3, 2 => 18, 3 => 15, 4 => 25.5, 5 => 27,
            6 => 27, 7 => 27, 8 => 27, 9 => 27, 10 => 27,
            11 => 27, 12 => 12, 13 => 18, 14 => 12, 15 => 18,
            16 => 15, 17 => 15, 18 => 24, 19 => 24, 20 => 24,
            21 => 24, 22 => 24, 23 => 24, 24 => 24, 25 => 24,
            26 => 24, 27 => 24, 28 => 24, 29 => 24, 30 => 24,
            31 => 24, 32 => 24, 33 => 24, 34 => 24, 35 => 24,
            36 => 24, 37 => 24, 38 => 24, 39 => 24, 40 => 24,
            41 => 24, 42 => 24, 43 => 24, 44 => 24, 45 => 21.75,
            46 => 9.75, 47 => 27.75, 48 => 9,
        ];

        foreach ($rowHeights as $row => $height) {
            $sheet->getRowDimension($row)->setRowHeight($height);
        }

        $sheet->getStyle('A1:M48')->getAlignment()->setWrapText(true);
    }
}
