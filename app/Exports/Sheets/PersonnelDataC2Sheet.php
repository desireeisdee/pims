<?php

namespace App\Exports\Sheets;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Carbon\Carbon;

class PersonnelDataC2Sheet
{
    protected $personnel;
    protected $worksheet;
    protected $spreadsheet;

    public function __construct($personnel, Spreadsheet $spreadsheet)
    {
        $this->personnel = $personnel;
        $this->spreadsheet = $spreadsheet;
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


    // protected function populateCivilServiceEligibilities()
    // {
    //     $worksheet = $this->worksheet;


    //     $startRow = 5;
    //     $endRow = 11;
    //     $currentRow = $startRow;
    //     $startRowCivilService = $startRow;
    //     $endRowCivilService = $endRow;


    //     if ($this->personnel->civilServiceEligibilities->isNotEmpty()) {
    //         foreach ($this->personnel->civilServiceEligibilities as $civil_service_eligibility) {
    //             if ($currentRow > $endRow) {
    //                 // Copy the current sheet and use the new copy
    //                 $newSheet = $worksheet->copy();
    //                 $newSheet->setTitle('Attachment' . $this->mapSheetCountToLetter($this->worksheet->getParent()->getSheetCount()));
    //                 $this->worksheet->getParent()->addSheet($newSheet);
    //                 $worksheet = $newSheet;
    //                 $currentRow = $startRow; // Reset the current row to the start row
    //             }

    //             // Populate the cell values
    //             $worksheet->setCellValue('A' . $currentRow, $civil_service_eligibility->title);
    //             $worksheet->setCellValue('F' . $currentRow, $civil_service_eligibility->rating);
    //             $worksheet->setCellValue('G' . $currentRow, Carbon::parse($civil_service_eligibility->date_of_exam)->format('m/d/Y'));
    //             $worksheet->setCellValue('I' . $currentRow, $civil_service_eligibility->place_of_exam);
    //             $worksheet->setCellValue('L' . $currentRow, $civil_service_eligibility->license_num);
    //             $worksheet->setCellValue('M' . $currentRow, Carbon::parse($civil_service_eligibility->license_date_of_validitym)->format('m/d/Y'));
    //             $currentRow++;
    //         }
    //     } else {
    //         $worksheet->setCellValue('A5', 'N/A');
    //         $worksheet->setCellValue('F5', 'N/A');
    //         $worksheet->setCellValue('G5', 'N/A');
    //         $worksheet->setCellValue('I5', 'N/A');
    //         $worksheet->setCellValue('L5', 'N/A');
    //         $worksheet->setCellValue('M5', 'N/A');
    //     }
    // }

    // protected function populateCivilServiceEligibilities()
    // {
    //     $worksheet = $this->worksheet;
    //     $startRow = 5; // Starting row for children info
    //     $endRow = 11; // Ending row for children info
    //     $currentRow = $startRow;

    //     if ($this->personnel->civilServiceEligibilities->isNotEmpty()) {

    //         if(count($this->personnel->civilServiceEligibilities) > ($endRow - $startRow))
    //         {
    //             $attachmentSheet = $this->spreadsheet->getSheetByName('cse_attachment');
    //             $newSheet = $attachmentSheet->copy();
    //             $attachmentCounter = 1;
    //             $i = 5;
    //             $newSheet->setTitle('Attachment CSE' .  $attachmentCounter);
    //             $this->spreadsheet->addSheet($newSheet);
    //             $new_sheet = $newSheet;


    //             foreach ($this->personnel->civilServiceEligibilities as $index => $civil_service_eligibility) {
    //                 if ($index < 7) {
    //                     $worksheet->setCellValue('A' . $currentRow, $civil_service_eligibility->title);
    //                     $worksheet->setCellValue('F' . $currentRow, $civil_service_eligibility->rating);
    //                     $worksheet->setCellValue('G' . $currentRow, Carbon::parse($civil_service_eligibility->date_of_exam)->format('m/d/Y'));
    //                     $worksheet->setCellValue('I' . $currentRow, $civil_service_eligibility->place_of_exam);
    //                     $worksheet->setCellValue('L' . $currentRow, $civil_service_eligibility->license_num);
    //                     $worksheet->setCellValue('M' . $currentRow, Carbon::parse($civil_service_eligibility->license_date_of_validity)->format('m/d/Y'));
    //                     $currentRow++;
    //                 } else {
    //                     $new_sheet->setCellValue('A1', 'Attachment CSE ' . $attachmentCounter);
    //                     $new_sheet->setCellValue('A' . $i, $civil_service_eligibility->title);
    //                     $new_sheet->setCellValue('F' . $i, $civil_service_eligibility->rating);
    //                     $new_sheet->setCellValue('G' . $i, Carbon::parse($civil_service_eligibility->date_of_exam)->format('m/d/Y'));
    //                     $new_sheet->setCellValue('I' . $i, $civil_service_eligibility->place_of_exam);
    //                     $new_sheet->setCellValue('L' . $i, $civil_service_eligibility->license_num);
    //                     $worksheet->setCellValue('M' . $i, Carbon::parse($civil_service_eligibility->license_date_of_validity)->format('m/d/Y'));
    //                     $i++;
    //                 }

    //             }
    //         }

    //     } else {
    //                 $worksheet->setCellValue('A5', 'N/A');
    //                 $worksheet->setCellValue('F5', 'N/A');
    //                 $worksheet->setCellValue('G5', 'N/A');
    //                 $worksheet->setCellValue('I5', 'N/A');
    //                 $worksheet->setCellValue('L5', 'N/A');
    //                 $worksheet->setCellValue('M5', 'N/A');
    //             }
    // }

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

    protected function populateCivilServiceEligibilities()
    {
        $worksheet = $this->worksheet;
        $startRow = 5; // Starting row for children info
        $endRow = 11; // Ending row for children info
        $currentRow = $startRow;

        if ($this->personnel->civilServiceEligibilities->isNotEmpty()) {

            if(count($this->personnel->civilServiceEligibilities) > ($endRow - $startRow))
            {
                $attachmentSheet = $this->spreadsheet->getSheetByName('cse_attachment');
                $newSheet = $attachmentSheet->copy();
                $attachmentCounter = 1;
                $i = 5;
                $newSheet->setTitle('Attachment CSE');
                $this->spreadsheet->addSheet($newSheet);
                $new_sheet = $newSheet;


                foreach ($this->personnel->civilServiceEligibilities as $index => $civil_service_eligibility) {
                    if ($index < 7) {
                        $worksheet->setCellValue('A' . $currentRow, $civil_service_eligibility->title);
                        $worksheet->setCellValue('F' . $currentRow, $civil_service_eligibility->rating);
                        $worksheet->setCellValue('G' . $currentRow, Carbon::parse($civil_service_eligibility->date_of_exam)->format('m/d/Y'));
                        $worksheet->setCellValue('I' . $currentRow, $civil_service_eligibility->place_of_exam);
                        $worksheet->setCellValue('L' . $currentRow, $civil_service_eligibility->license_num);
                        $worksheet->setCellValue('M' . $currentRow, Carbon::parse($civil_service_eligibility->license_date_of_validity)->format('m/d/Y'));
                        $currentRow++;
                    } else {
                        $new_sheet->setCellValue('A1', 'Attachment CSE ');
                        $new_sheet->setCellValue('A' . $i, $civil_service_eligibility->title);
                        $new_sheet->setCellValue('F' . $i, $civil_service_eligibility->rating);
                        $new_sheet->setCellValue('G' . $i, Carbon::parse($civil_service_eligibility->date_of_exam)->format('m/d/Y'));
                        $new_sheet->setCellValue('I' . $i, $civil_service_eligibility->place_of_exam);
                        $new_sheet->setCellValue('L' . $i, $civil_service_eligibility->license_num);
                        $worksheet->setCellValue('M' . $i, Carbon::parse($civil_service_eligibility->license_date_of_validity)->format('m/d/Y'));
                        $i++;
                    }

                }
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

    // protected function populateWorkExperiences()
    // {
    //     $worksheet = $this->worksheet;
    //     $startRow = 18; // Starting row for children info
    //     $endRow = 45; // Ending row for children info
    //     $currentRow = $startRow;

    //     $worksheet->setCellValue('D47', $this->personnel->workExperiences->isNotEmpty() );
    //     if ($this->personnel->workExperiences->isNotEmpty()) {

    //         if(count($this->personnel->workExperiences) > ($endRow - $startRow))
    //         {
    //             $attachmentSheet = $this->spreadsheet->getSheetByName('we_attachment');
    //             $newSheet = $attachmentSheet->copy();
    //             $attachmentCounter = 1;
    //             $i = 7;
    //             $newSheet->setTitle('Attachment Work Experience');
    //             $this->spreadsheet->addSheet($newSheet);
    //             $new_sheet = $newSheet;


    //             foreach ($this->personnel->workExperiences as $index => $work_experience) {
    //                 if ($index < 7) {
    //                     $worksheet->setCellValue('A' . $currentRow, Carbon::parse($work_experience->inclusive_from)->format('m/d/Y'));
    //                     $worksheet->setCellValue('C' . $currentRow, Carbon::parse($work_experience->inclusive_to)->format('m/d/Y'));
    //                     $worksheet->setCellValue('D' . $currentRow, $work_experience->title);
    //                     $worksheet->setCellValue('G' . $currentRow, $work_experience->company);
    //                     $worksheet->setCellValue('J' . $currentRow, $work_experience->monthly_salary);
    //                     $worksheet->setCellValue('K' . $currentRow, $work_experience->paygrade_step_increment);
    //                     $worksheet->setCellValue('L' . $currentRow, $work_experience->appointment);
    //                     $worksheet->setCellValue('M' . $currentRow, $work_experience->is_gov_service);
    //                     $currentRow++;
    //                 } else {
    //                     $new_sheet->setCellValue('A1', 'Attachment Work Experience ');
    //                     $new_sheet->setCellValue('A' . $currentRow, Carbon::parse($work_experience->inclusive_from)->format('m/d/Y'));
    //                     $new_sheet->setCellValue('C' . $currentRow, Carbon::parse($work_experience->inclusive_to)->format('m/d/Y'));
    //                     $new_sheet->setCellValue('D' . $currentRow, $work_experience->title);
    //                     $new_sheet->setCellValue('G' . $currentRow, $work_experience->company);
    //                     $new_sheet->setCellValue('J' . $currentRow, $work_experience->monthly_salary);
    //                     $new_sheet->setCellValue('K' . $currentRow, $work_experience->paygrade_step_increment);
    //                     $new_sheet->setCellValue('L' . $currentRow, $work_experience->appointment);
    //                     $new_sheet->setCellValue('M' . $currentRow, $work_experience->is_gov_service);
    //                     $i++;
    //                 }

    //             }
    //         }
    //     } else {
    //         $worksheet->setCellValue('A18', 'N/A');
    //         $worksheet->setCellValue('C18', 'N/A');
    //         $worksheet->setCellValue('D18', 'N/A');
    //         $worksheet->setCellValue('G18', 'N/A');
    //         $worksheet->setCellValue('J18', 'N/A');
    //         $worksheet->setCellValue('K18', 'N/A');
    //         $worksheet->setCellValue('L18', 'N/A');
    //         $worksheet->setCellValue('M18', 'N/A');
    //     }
    // }

}
