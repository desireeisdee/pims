<?php
namespace App\Exports;

use App\Exports\Sheets\PersonnelDataC1Sheet;
use App\Exports\Sheets\PersonnelDataC2Sheet;
use App\Exports\Sheets\PersonnelDataC3Sheet;
use App\Exports\Sheets\PersonnelDataC4Sheet;
use App\Models\Personnel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PersonnelDataExport implements WithDefaultStyles, WithMultipleSheets
{
    use Exportable;

    public $personnel_id;
    protected $data;

    public function __construct($data, $id)
    {
        $this->data = $data;
        $this->personnel_id = $id;
    }

    public function sheets(): array
    {
        return [
            'C1' => new PersonnelDataC1Sheet($this->personnel_id),
            'C2' => new PersonnelDataC2Sheet($this->personnel_id),
            'C3' => new PersonnelDataC3Sheet($this->personnel_id),
            'C4' => new PersonnelDataC4Sheet($this->personnel_id),
        ];
    }

    public function defaultStyles(Style $defaultStyle)
    {
        $defaultStyle->getFont()->setName('Arial Narrow');
        $defaultStyle->getFont()->setSize(8);

        return $defaultStyle;
    }
}
