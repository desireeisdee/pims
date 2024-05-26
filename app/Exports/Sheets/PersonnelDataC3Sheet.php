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


class PersonnelDataC3Sheet implements WithTitle, FromView, WithStyles
{
    public $personnel_id;

    public function __construct($id)
    {
        $this->personnel_id = $id;
    }

    public function title(): string
    {
        return 'C3';
    }

    public function view(): View
    {
        return view('export.pds-c3', [
            'personnel' => Personnel::findOrFail($this->personnel_id)
        ]);
    }

    public function styles(Worksheet $sheet)
    {
       // Set column widths
        $columnWidths = [
            'A' => 3, 'B' => 29.86, 'C' => 2.43, 'D' => 20, 'E' => 9.57,
            'F' => 9.43, 'G' => 9.43, 'H' => 10.57, 'I' => 2.29, 'J' => 3.86,
            'K' => 25.43,
        ];

        foreach ($columnWidths as $column => $width) {
            $sheet->getColumnDimension($column)->setWidth($width);
        }

        // Set row heights
        $rowHeights = [
            1 => 3, 2 => 22.5, 3 => 15, 4 => 11.25, 5 => 13.5,
            6 => 27.75, 7 => 27.75, 8 => 27.75, 9 => 27.75, 10 => 27.75,
            11 => 27.75, 12 => 27.75, 13 => 11.25, 14 => 18, 15 => 18,
            16 => 25.5, 17 => 13.5, 18 => 24.75, 19 => 24.75, 20 => 24.75,
            21 => 24.75, 22 => 24.75, 23 => 24.75, 24 => 24.75, 25 => 24.75,
            26 => 24.75, 27 => 24.75, 28 => 24.75, 29 => 24.75, 30 => 24.75,
            31 => 24.75, 32 => 24.75, 33 => 24.75, 34 => 24.75, 35 => 24.75,
            36 => 24.75, 37 => 24.75, 38 => 24.75, 39 => 13.5, 40 => 22.5,
            41 => 33.75, 42 => 24.75, 43 => 24.75, 44 => 24.75, 45 => 24.75,
            46 => 24.75, 47 => 24.75, 48 => 24.75, 49 => 11.25, 50 => 28.5,
            51 => 9.75,
        ];

        foreach ($rowHeights as $row => $height) {
            $sheet->getRowDimension($row)->setRowHeight($height);
        }

        $sheet->getStyle('A1:N61')->getAlignment()->setWrapText(true);
    }
}
