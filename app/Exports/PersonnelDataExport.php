<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Personnel;
use App\Exports\Sheets\PersonnelDataC1Sheet;
use App\Exports\Sheets\PersonnelDataC2Sheet;
use App\Exports\Sheets\PersonnelDataC3Sheet;
use App\Exports\Sheets\PersonnelDataC4Sheet;

class PersonnelDataExport
{
    protected $personnel;
    protected $filename;
    protected $spreadsheet;
    protected $excelOutputPath;
    protected $pdfOutputPath;

    public function __construct($id)
    {
        try{
        $this->personnel = Personnel::findOrFail($id);

        $this->filename = public_path('report/macro_enabled_cs_form_no_212.xlsm');
        $this->spreadsheet = IOFactory::load($this->filename);

        $personnelC1Sheet = new PersonnelDataC1Sheet($this->personnel, $this->spreadsheet);
        $personnelC1Sheet->populateSheet();

        $personnelC2Sheet = new PersonnelDataC2Sheet($this->personnel, $this->spreadsheet);
        $personnelC2Sheet->populateSheet();

        $personnelC3Sheet = new PersonnelDataC3Sheet($this->personnel, $this->spreadsheet);
        $personnelC3Sheet->populateSheet();

        $personnelC4Sheet = new PersonnelDataC4Sheet($this->personnel, $this->spreadsheet);
        $personnelC4Sheet->populateSheet();

        $this->excelOutputPath = public_path('report/pds_generated.xlsm');
        $this->pdfOutputPath = public_path('report/pds_generated.pdf');

        // Save the Excel file

        $this->spreadsheet->getSheetByName('children_attachment')->setSheetState(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet::SHEETSTATE_HIDDEN);
        $this->spreadsheet->getSheetByName('cse_attachment')->setSheetState(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet::SHEETSTATE_HIDDEN);
        $this->spreadsheet->getSheetByName('work_experience_attachment')->setSheetState(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet::SHEETSTATE_HIDDEN);
        $this->spreadsheet->getSheetByName('voluntary_work_attachment')->setSheetState(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet::SHEETSTATE_HIDDEN);
        $this->spreadsheet->getSheetByName('training_attachment')->setSheetState(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet::SHEETSTATE_HIDDEN);
        $this->spreadsheet->getSheetByName('other_information_attachment')->setSheetState(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet::SHEETSTATE_HIDDEN);


        $writer = IOFactory::createWriter($this->spreadsheet, 'Xlsx');
        $writer->save($this->excelOutputPath);

            session()->flash('flash.banner', 'Personnel Data Exported Successfully');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            session()->flash('flash.banner', 'Failed to export Personnel Data, something went wrong');
            session()->flash('flash.bannerStyle', 'danger');
        }
    }


    public function getOutputPath()
    {
        return $this->excelOutputPath;
    }
}
