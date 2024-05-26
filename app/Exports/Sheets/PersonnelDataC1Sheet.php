<?php
namespace App\Exports\Sheets;
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

class PersonnelDataC1Sheet implements WithTitle, FromView, WithStyles
{
    public $personnel_id;

    public function __construct($id)
    {
        $this->personnel_id = $id;
    }

    public function title(): string
    {
        return 'C1';
    }

    public function view(): View
    {
        return view('export.pds-c1', [
            'personnel' => Personnel::findOrFail($this->personnel_id)
        ]);
    }

    public function styles(Worksheet $sheet)
    {
       // Set column widths
        $columnWidths = [
            'A' => 1.71, 'B' => 12.86, 'C' => 5.29, 'D' => 18, 'E' => 5.57,
            'F' => 4.86, 'G' => 7.86, 'H' => 9.29, 'I' => 8.71, 'J' => 7,
            'K' => 7, 'L' => 10.71, 'M' => 8.14, 'N' => 8.86,
        ];

        foreach ($columnWidths as $column => $width) {
            $sheet->getColumnDimension($column)->setWidth($width);
        }

        // Set row heights
        $rowHeights = [
            1 => 2.25, 2 => 11.25, 3 => 41.25, 4 => 21.75, 5 => 11.25,
            6 => 0, 7 => 12.75, 8 => 2.25, 9 => 16.5, 10 => 22.5,
            11 => 22.5, 12 => 21.75, 13 => 24, 14 => 12, 15 => 24.75,
            16 => 24.75, 17 => 15.75, 18 => 9, 19 => 5.25, 20 => 9.75,
            21 => 9, 22 => 15.75, 23 => 8.25, 24 => 22.5, 25 => 15.75,
            26 => 9, 27 => 15.75, 28 => 9, 29 => 15.75, 30 => 9.75,
            31 => 24.75, 32 => 24.75, 33 => 24.75, 34 => 24.75, 35 => 16.5,
            36 => 21, 37 => 21, 38 => 21, 39 => 21, 40 => 21,
            41 => 21, 42 => 21, 43 => 21, 44 => 21, 45 => 21,
            46 => 21, 47 => 21, 48 => 21, 49 => 21, 50 => 15.75,
            51 => 14.25, 52 => 19.5, 53 => 14.25, 54 => 28.5, 55 => 28.5,
            56 => 28.5, 57 => 28.5, 58 => 28.5, 59 => 12, 60 => 27.75,
            61 => 12,
        ];

        foreach ($rowHeights as $row => $height) {
            $sheet->getRowDimension($row)->setRowHeight($height);
        }

        $checkbox = new Drawing();
        $checkbox->setName('Checkbox');
        $checkbox->setDescription('Checkbox');
        $checkbox->setPath(public_path('image/checkbox.png')); // Path to your checkbox image
        $checkbox->setWidth(20); // Width in pixels
        $checkbox->setHeight(20); // Height in pixels
        $checkbox->setCoordinates('D7'); // Cell coordinates
        $checkbox->setOffsetX(1); // Adjust X offset as needed
        $checkbox->setOffsetY(1); // Adjust Y offset as needed

        $checkbox->setWorksheet($sheet);
        $sheet->getStyle('A1:N61')->getAlignment()->setWrapText(true);
    }
}
