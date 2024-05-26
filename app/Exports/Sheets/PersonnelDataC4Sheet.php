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


class PersonnelDataC4Sheet implements WithTitle, FromView, WithStyles
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
        return view('export.pds-c4', [
            'personnel' => Personnel::findOrFail($this->personnel_id)
        ]);
    }

    public function styles(Worksheet $sheet)
    {
       // Set column widths
        $columnWidths = [
            'A' => 1, 'B' => 1, 'C' => 12.29, 'D' => 23, 'E' => 2.29,
            'F' => 26.29, 'G' => 3, 'H' => 6.29, 'I' => 2.29, 'J' => 1.71,
            'K' => 6.71, 'L' => 16, 'M' => 1.29,
        ];

        foreach ($columnWidths as $column => $width) {
            $sheet->getColumnDimension($column)->setWidth($width);
        }

        // Set row heights
        $rowHeights = [
            1 => 3, 2 => 13.5, 3 => 12.75, 4 => 12, 5 => 3,
            6 => 14.25, 7 => 3, 8 => 15.75, 9 => 0, 10 => 12.75,
            11 => 14.25, 12 => 5.25, 13 => 18, 14 => 14.25, 15 => 14.25,
            16 => 5.25, 17 => 6.75, 18 => 12.75, 19 => 14.25, 20 => 14.25,
            21 => 14.25, 22 => 5.25, 23 => 18, 24 => 15, 25 => 15,
            26 => 6, 27 => 14.25, 28 => 12, 29 => 11.25, 30 => 6,
            31 => 18, 32 => 12, 33 => 6.75, 34 => 14.25, 35 => 14.25,
            36 => 4.5, 37 => 18, 38 => 12, 39 => 14.25, 40 => 6,
            41 => 28.5, 42 => 0.75, 43 => 13.5, 44 => 15, 45 => 13.5,
            46 => 15, 47 => 13.5, 48 => 12, 49 => 6.75, 50 => 23.25,
            51 => 18, 52 => 24, 53 => 24, 54 => 24, 55 => 39.75,
            56 => 13.5, 57 => 13.5, 58 => 7.5, 59 => 8.25, 60 => 25.5,
            61 => 20.25, 62 => 9, 63 => 12, 64 => 10.5, 65 => 12.75,
            66 => 8.25, 67 => 28.5, 68 => 53.25, 69 => 18, 70 => 11.25,
            71 => 10.5,
        ];

        foreach ($rowHeights as $row => $height) {
            $sheet->getRowDimension($row)->setRowHeight($height);
        }

        $sheet->getStyle('A1:M71')->getAlignment()->setWrapText(true);
    }
}
