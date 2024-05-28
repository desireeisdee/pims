<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
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
    protected $outputPath;

    public function __construct($id)
    {
        $this->personnel = Personnel::findOrFail($id); // Ensure this returns a single model instance

        $this->filename = public_path('report/cs_form_no_212.xlsx'); // Adjust the path as needed
        $this->spreadsheet = IOFactory::load($this->filename);

        $personnelC1Sheet = new PersonnelDataC1Sheet($this->personnel, $this->spreadsheet);
        $personnelC1Sheet->populateSheet();

        $personnelC2Sheet = new PersonnelDataC2Sheet($this->personnel, $this->spreadsheet);
        $personnelC2Sheet->populateSheet();

        $personnelC3Sheet = new PersonnelDataC3Sheet($this->personnel, $this->spreadsheet);
        $personnelC3Sheet->populateSheet();

        $personnelC4Sheet = new PersonnelDataC4Sheet($this->personnel, $this->spreadsheet);
        $personnelC4Sheet->populateSheet();

        // Save the updated spreadsheet to a temporary file
        $this->outputPath = public_path('report/pds_generated.xlsx'); // Adjust the path as needed
        $writer = new Xlsx($this->spreadsheet);
        $writer->save($this->outputPath);
    }

    public function getOutputPath()
    {
        return $this->outputPath;
    }
}
