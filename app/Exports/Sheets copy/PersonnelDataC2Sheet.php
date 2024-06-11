<?php

namespace App\Exports\Sheets;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Carbon\Carbon;

class PersonnelDataC2Sheet
{
    protected $personnel;
    protected $worksheet;

    public function __construct($personnel, Spreadsheet $spreadsheet)
    {
        $this->personnel = $personnel;
        // $this->personnel = $this->personnel[0];
        $this->worksheet = $spreadsheet->getSheet(1);
    }

    public function populateSheet()
    {

        $this->populateCivilServiceEligibilities();
        $this->populateWorkExperiences();
    }

    protected function mapSheetCountToLetter($sheetCount) {
        $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
        return $letters[$sheetCount - 5] ?? 'Z'; // Return 'Z' or any default for counts beyond predefined letters
    }


    protected function populateCivilServiceEligibilities()
    {
        $worksheet = $this->worksheet;

        $startRow = 5;
        $endRow = 11;
        $currentRow = $startRow;
        $startRowCivilService = $startRow;
        $endRowCivilService = $endRow;


        if ($this->personnel->civilServiceEligibilities->isNotEmpty()) {
            foreach ($this->personnel->civilServiceEligibilities as $civil_service_eligibility) {
                if ($currentRow > $endRow) {
                    // Copy the current sheet and use the new copy
                    $newSheet = $worksheet->copy();
                    $newSheet->setTitle('Attachment' . $this->mapSheetCountToLetter($this->worksheet->getParent()->getSheetCount()));
                    $this->worksheet->getParent()->addSheet($newSheet);
                    $worksheet = $newSheet;
                    $currentRow = $startRow; // Reset the current row to the start row
                }

                // Populate the cell values
                $worksheet->setCellValue('A' . $currentRow, $civil_service_eligibility->title);
                $worksheet->setCellValue('F' . $currentRow, $civil_service_eligibility->rating);
                $worksheet->setCellValue('G' . $currentRow, Carbon::parse($civil_service_eligibility->date_of_exam)->format('m/d/Y'));
                $worksheet->setCellValue('I' . $currentRow, $civil_service_eligibility->place_of_exam);
                $worksheet->setCellValue('L' . $currentRow, $civil_service_eligibility->license_num);
                $worksheet->setCellValue('M' . $currentRow, Carbon::parse($civil_service_eligibility->license_date_of_validitym)->format('m/d/Y'));
                $currentRow++;
            }
        } else {
            $worksheet->setCellValue('A5', 'N/A');
            $worksheet->setCellValue('F5', 'N/A');
            $worksheet->setCellValue('G5', 'N/A');
            $worksheet->setCellValue('I5', 'N/A');
            $worksheet->setCellValue('L5', 'N/A');
            $worksheet->setCellValue('M5', 'N/A');
        }
    }

    protected function populateWorkExperiences()
    {
        $worksheet = $this->worksheet;

        $startRow = 18;
        $endRow = 45;
        $currentRow = $startRow;

        if ($this->personnel->workExperiences->isNotEmpty()) {
            foreach ($this->personnel->workExperiences as $work_experience) {
                if ($currentRow > $endRow) {
                    // Create a new sheet or use the next existing sheet
                    $currentSheetIndex = $this->worksheet->getParent()->getIndex($worksheet) + 1;
                    if ($currentSheetIndex >= $this->worksheet->getParent()->getSheetCount()) {
                        $worksheet = $this->worksheet->getParent()->createSheet();
                        $worksheet->setTitle('Attachment' . ($currentSheetIndex + 1));
                    } else {
                        $worksheet = $this->worksheet->getParent()->getSheet($currentSheetIndex);
                    }
                    $currentRow = $startRow; // Reset the current row to the start row
                }

                // Populate the cell values
                $worksheet->setCellValue('A' . $currentRow, Carbon::parse($work_experience->inclusive_from)->format('m/d/Y'));
                $worksheet->setCellValue('C' . $currentRow, Carbon::parse($work_experience->inclusive_to)->format('m/d/Y'));
                $worksheet->setCellValue('D' . $currentRow, $work_experience->title);
                $worksheet->setCellValue('G' . $currentRow, $work_experience->company);
                $worksheet->setCellValue('J' . $currentRow, $work_experience->monthly_salary);
                $worksheet->setCellValue('K' . $currentRow, $work_experience->paygrade_step_increment);
                $worksheet->setCellValue('L' . $currentRow, $work_experience->appointment);
                $worksheet->setCellValue('M' . $currentRow, $work_experience->is_gov_service);
                $currentRow++;
            }
        } else {
            $worksheet->setCellValue('A18', 'N/A');
            $worksheet->setCellValue('C18', 'N/A');
            $worksheet->setCellValue('D18', 'N/A');
            $worksheet->setCellValue('G18', 'N/A');
            $worksheet->setCellValue('J18', 'N/A');
            $worksheet->setCellValue('K18', 'N/A');
            $worksheet->setCellValue('L18', 'N/A');
            $worksheet->setCellValue('M18', 'N/A');
        }
    }
}
