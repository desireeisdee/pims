<?php

namespace App\Exports\Sheets;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

class PersonnelDataC1Sheet
{
    protected $personnel;
    protected $worksheet;

    public function __construct($personnel, Spreadsheet $spreadsheet)
    {
        $this->personnel = $personnel;
        // $this->personnel = $this->personnel[0];
        $this->worksheet = $spreadsheet->getSheet(0); // Assuming the first sheet is being used
    }

    public function populateSheet()
    {
        $this->populatePersonalInfo();
        if ($this->personnel->addresses) {
            $this->populateAddress();
        }

        if ($this->personnel->families) {
            $this->populateFamilyInfo();
        }

        if ($this->personnel->educations) {
            $this->populateEducation();
        }

        if ($this->personnel->children) {
            $this->populateChildren();
        }
    }

    protected function populatePersonalInfo()
    {
        $worksheet = $this->worksheet;

        // Populate specific cells with data
        $worksheet->setCellValue('D10', $this->personnel->last_name);
        $worksheet->setCellValue('D11', $this->personnel->first_name);
        $worksheet->setCellValue('D12', $this->personnel->middle_name);
        $worksheet->setCellValue('L11', $this->personnel->name_ext);
        $worksheet->setCellValue('D13', $this->personnel->date_of_birth);
        $worksheet->setCellValue('D15', $this->personnel->place_of_birth);
        $worksheet->setCellValue('D16', $this->personnel->sex);
        $worksheet->setCellValue('D17', $this->personnel->civil_status);
        $worksheet->setCellValue('J13', $this->personnel->citizenship);

        $worksheet->setCellValue('D22', $this->personnel->height);
        $worksheet->setCellValue('D24', $this->personnel->weight);
        $worksheet->setCellValue('D25', $this->personnel->blood_type);
        $worksheet->setCellValue('D27', $this->personnel->gsis_num);
        $worksheet->setCellValue('D29', $this->personnel->pagibig_num);
        $worksheet->setCellValue('D31', $this->personnel->philhealth_num);
        $worksheet->setCellValue('D32', $this->personnel->sss_num);
        $worksheet->setCellValue('D33', $this->personnel->tin);
        $worksheet->setCellValue('D34', $this->personnel->personnel_id);
        $worksheet->setCellValue('I32', $this->personnel->tel_no);
        $worksheet->setCellValue('I33', $this->personnel->mobile_no);
        $worksheet->setCellValue('I34', $this->personnel->email);
    }

    protected function populateAddress()
    {
        $worksheet = $this->worksheet;

        if ($this->personnel->residentialAddress) {
            // Residential Address
            $worksheet->setCellValue('I17', $this->personnel->residentialAddress->house_no);
            $worksheet->setCellValue('L17', $this->personnel->residentialAddress->street);
            $worksheet->setCellValue('I19', $this->personnel->residentialAddress->subdivision);
            $worksheet->setCellValue('L19', $this->personnel->residentialAddress->barangay);
            $worksheet->setCellValue('I22', $this->personnel->residentialAddress->city);
            $worksheet->setCellValue('L22', $this->personnel->residentialAddress->province);
            $worksheet->setCellValue('I24', $this->personnel->residentialAddress->zip_code);
        }

        if ($this->personnel->permanentAddress) {
            // Permanent Address
            $worksheet->setCellValue('I25', $this->personnel->permanentAddress->house_no);
            $worksheet->setCellValue('L25', $this->personnel->permanentAddress->street);
            $worksheet->setCellValue('I27', $this->personnel->permanentAddress->subdivision);
            $worksheet->setCellValue('L27', $this->personnel->permanentAddress->barangay);
            $worksheet->setCellValue('I29', $this->personnel->permanentAddress->city);
            $worksheet->setCellValue('L29', $this->personnel->permanentAddress->province);
            $worksheet->setCellValue('I31', $this->personnel->permanentAddress->zip_code);
        }
    }

    protected function populateFamilyInfo()
    {
        $worksheet = $this->worksheet;

        if ($this->personnel->spouse) {
            // Spouse Information
            $worksheet->setCellValue('D36', $this->personnel->spouse->last_name);
            $worksheet->setCellValue('D37', $this->personnel->spouse->first_name);
            $worksheet->setCellValue('D38', $this->personnel->spouse->middle_name);
            $worksheet->setCellValue('H37', $this->personnel->spouse->name_ext);
            $worksheet->setCellValue('D39', $this->personnel->spouse->occupation);
            $worksheet->setCellValue('D40', $this->personnel->spouse->employer_business_name);
            $worksheet->setCellValue('D41', $this->personnel->spouse->telephone_number);
            $worksheet->setCellValue('D42', $this->personnel->spouse->business_address);
        }

        if ($this->personnel->father) {
            // Father's Information
            $worksheet->setCellValue('D43', $this->personnel->father->last_name);
            $worksheet->setCellValue('D44', $this->personnel->father->first_name);
            $worksheet->setCellValue('D45', $this->personnel->father->middle_name);
            $worksheet->setCellValue('H44', $this->personnel->father->name_ext);
        }

        if ($this->personnel->mother) {
            // Mother's Information
            $worksheet->setCellValue('D47', $this->personnel->mother->last_name);
            $worksheet->setCellValue('D48', $this->personnel->mother->first_name);
            $worksheet->setCellValue('D49', $this->personnel->mother->middle_name);
        }
    }

    protected function populateEducation()
    {
        $worksheet = $this->worksheet;

        if ($this->personnel->elementaryEducation) {
            $worksheet->setCellValue('D54', $this->personnel->elementaryEducation->school_name);
            $worksheet->setCellValue('G54', $this->personnel->elementaryEducation->degree_course);
            $worksheet->setCellValue('J54', $this->personnel->elementaryEducation->period_from);
            $worksheet->setCellValue('K54', $this->personnel->elementaryEducation->period_to);
            $worksheet->setCellValue('L54', $this->personnel->elementaryEducation->highest_level_units);
            $worksheet->setCellValue('M54', $this->personnel->elementaryEducation->year_graduated);
            $worksheet->setCellValue('N54', $this->personnel->elementaryEducation->scholarship_honors);
        }

        if ($this->personnel->secondaryEducation) {
            $worksheet->setCellValue('D55', $this->personnel->secondaryEducation->school_name);
            $worksheet->setCellValue('G55', $this->personnel->secondaryEducation->degree_course);
            $worksheet->setCellValue('J55', $this->personnel->secondaryEducation->period_from);
            $worksheet->setCellValue('K55', $this->personnel->secondaryEducation->period_to);
            $worksheet->setCellValue('L55', $this->personnel->secondaryEducation->highest_level_units);
            $worksheet->setCellValue('M55', $this->personnel->secondaryEducation->year_graduated);
            $worksheet->setCellValue('N55', $this->personnel->secondaryEducation->scholarship_honors);
        }

        if ($this->personnel->vocationalEducation) {
            $worksheet->setCellValue('D56', $this->personnel->vocationalEducation->school_name);
            $worksheet->setCellValue('G56', $this->personnel->vocationalEducation->degree_course);
            $worksheet->setCellValue('J56', $this->personnel->vocationalEducation->period_from);
            $worksheet->setCellValue('K56', $this->personnel->vocationalEducation->period_to);
            $worksheet->setCellValue('L56', $this->personnel->vocationalEducation->highest_level_units);
            $worksheet->setCellValue('M56', $this->personnel->vocationalEducation->year_graduated);
            $worksheet->setCellValue('N56', $this->personnel->vocationalEducation->scholarship_honors);
        }

        if ($this->personnel->graduateEducation) {
            $worksheet->setCellValue('D57', $this->personnel->graduateEducation->school_name);
            $worksheet->setCellValue('G57', $this->personnel->graduateEducation->degree_course);
            $worksheet->setCellValue('J57', $this->personnel->graduateEducation->period_from);
            $worksheet->setCellValue('K57', $this->personnel->graduateEducation->period_to);
            $worksheet->setCellValue('L57', $this->personnel->graduateEducation->highest_level_units);
            $worksheet->setCellValue('M57', $this->personnel->graduateEducation->year_graduated);
            $worksheet->setCellValue('N57', $this->personnel->graduateEducation->scholarship_honors);
        }

        if ($this->personnel->graduateStudiesEducation) {
            $worksheet->setCellValue('D58', $this->personnel->graduateStudiesEducation->school_name);
            $worksheet->setCellValue('G58', $this->personnel->graduateStudiesEducation->degree_course);
            $worksheet->setCellValue('J58', $this->personnel->graduateStudiesEducation->period_from);
            $worksheet->setCellValue('K58', $this->personnel->graduateStudiesEducation->period_to);
            $worksheet->setCellValue('L58', $this->personnel->graduateStudiesEducation->highest_level_units);
            $worksheet->setCellValue('M58', $this->personnel->graduateStudiesEducation->year_graduated);
            $worksheet->setCellValue('N58', $this->personnel->graduateStudiesEducation->scholarship_honors);
        }
    }

    protected function populateChildren()
    {
        $worksheet = $this->worksheet;

        $startRow = 37; // Starting row for children info
        $endRow = 49; // Ending row for children info
        $currentRow = $startRow;

        foreach ($this->personnel->children as $child) {
            if ($currentRow > $endRow) {
                // Create a new sheet or use the next existing sheet
                $currentSheetIndex = $this->worksheet->getParent()->getIndex($worksheet) + 1;
                if ($currentSheetIndex >= $this->worksheet->getParent()->getSheetCount()) {
                    $worksheet = $this->worksheet->getParent()->createSheet();
                    $worksheet->setTitle('Additional Children ' . ($currentSheetIndex + 1));
                } else {
                    $worksheet = $this->worksheet->getParent()->getSheet($currentSheetIndex);
                }
                $currentRow = $startRow; // Reset the current row to the start row
            }

            // Populate the cell values
            $worksheet->setCellValue('I' . $currentRow, $child->fullName());
            $worksheet->setCellValue('M' . $currentRow, $child->date_of_birth);
            $currentRow++;
        }
    }
}
