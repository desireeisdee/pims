<?php
namespace App\Exports;

use App\Models\School;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class SchoolsExport implements FromView, WithDefaultStyles, WithHeadings, WithStyles, WithEvents
{
    use Exportable;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function defaultStyles(Style $defaultStyle)
    {
        $defaultStyle->getFont()->setName('Arial');
        $defaultStyle->getFont()->setSize(11);

        return $defaultStyle;
    }

    public function registerEvents(): array
    {
        return [
            BeforeWriting::class => function (BeforeWriting $event) {
                $writer = $event->writer;
                $sheet = $writer->getActiveSheet();

                $sheet->getStyle('A1:S82')->getAlignment()->setWrapText(true);

                $sheet->getRowDimension(1)->setRowHeight(23.25);
                $sheet->getRowDimension(3)->setRowHeight(14.25);
                $sheet->getRowDimension(4)->setRowHeight(13.5);
                $sheet->getRowDimension(5)->setRowHeight(21.75);
                $sheet->getRowDimension(6)->setRowHeight(4.5);
                $sheet->getRowDimension(7)->setRowHeight(19.5);
                $sheet->getRowDimension(8)->setRowHeight(4.5);
                $sheet->getRowDimension(9)->setRowHeight(30);
                $sheet->getRowDimension(10)->setRowHeight(32.25);
                $sheet->getRowDimension(11)->setRowHeight(30.75);
                $sheet->getRowDimension(12)->setRowHeight(12);
                $sheet->getRowDimension(13)->setRowHeight(12);
                $sheet->getRowDimension(14)->setRowHeight(12);
                $sheet->getRowDimension(15)->setRowHeight(12);
                $sheet->getRowDimension(16)->setRowHeight(12);
                $sheet->getRowDimension(17)->setRowHeight(12);
                $sheet->getRowDimension(18)->setRowHeight(27.75);
                $sheet->getRowDimension(19)->setRowHeight(82.5);

                $sheet->getColumnDimension('A')->setWidth(8.57);
                $sheet->getColumnDimension('B')->setWidth(24.43);
                $sheet->getColumnDimension('C')->setWidth(4.86);
                $sheet->getColumnDimension('D')->setWidth(7.29);
                $sheet->getColumnDimension('E')->setWidth(0.58);
                $sheet->getColumnDimension('F')->setWidth(8.57);
                $sheet->getColumnDimension('G')->setWidth(8.57);
                $sheet->getColumnDimension('H')->setWidth(12.29);
                $sheet->getColumnDimension('I')->setWidth(11.57);
                $sheet->getColumnDimension('J')->setWidth(0.83);
                $sheet->getColumnDimension('K')->setWidth(5.86);
                $sheet->getColumnDimension('L')->setWidth(3);
                $sheet->getColumnDimension('M')->setWidth(17.43);
                $sheet->getColumnDimension('N')->setWidth(6.43);
                $sheet->getColumnDimension('O')->setWidth(6.43);
                $sheet->getColumnDimension('P')->setWidth(6.14);
                $sheet->getColumnDimension('Q')->setWidth(9.71);
                $sheet->getColumnDimension('R')->setWidth(7.29);
                $sheet->getColumnDimension('S')->setWidth(7.14);
            },
        ];
    }

    public function view(): View
    {
        return view('admin.school.export.school-form-report', [
            'school' => School::findOrFail(6)
        ]);
    }

    public function headings(): array
    {
        return [
            'School ID',
            'School Name',
            'Region',
            'Division',
            'District',
            'Address',
            'Email',
            'Phone',
            'General Curricular Offering',
            'Curricular Classification'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:S82')->getAlignment()->setWrapText(true);
    }
}
