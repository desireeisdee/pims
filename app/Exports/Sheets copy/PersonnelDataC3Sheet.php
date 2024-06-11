<?php

namespace App\Exports\Sheets;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Carbon\Carbon;

class PersonnelDataC3Sheet
{
    protected $personnel;
    protected $worksheet;

    public function __construct($personnel, Spreadsheet $spreadsheet)
    {
        $this->personnel = $personnel;
        $this->worksheet = $spreadsheet->getSheet(2);
    }

    public function populateSheet()
    {
        $this->populateVoluntaryWorks();
        $this->populateTrainingCertifications();
        $this->populateOtherInformation();
    }

    protected function populateVoluntaryWorks()
    {
        $worksheet = $this->worksheet;

        $startRow = 6;
        $endRow = 12;
        $currentRow = $startRow;

        if($this->personnel->voluntaryWorks->isNotEmpty()){
            foreach ($this->personnel->voluntaryWorks as $voluntary_work) {
                if ($currentRow > $endRow) {
                    // Create a new sheet or use the next existing sheet
                    $currentSheetIndex = $this->worksheet->getParent()->getIndex($worksheet) + 1;
                    if ($currentSheetIndex >= $this->worksheet->getParent()->getSheetCount()) {
                        $worksheet = $this->worksheet->getParent()->createSheet();
                        $worksheet->setTitle('Additional Voluntary Work ' . ($currentSheetIndex + 1));
                    } else {
                        $worksheet = $this->worksheet->getParent()->getSheet($currentSheetIndex);
                    }
                    $currentRow = $startRow; // Reset the current row to the start row
                }

                // Populate the cell values
                $worksheet->setCellValue('A' . $currentRow, $voluntary_work->organization);
                $worksheet->setCellValue('E' . $currentRow, Carbon::parse($voluntary_work->inclusive_from)->format('m/d/Y'));
                $worksheet->setCellValue('F' . $currentRow, Carbon::parse($voluntary_work->inclusive_to)->format('m/d/Y'));
                $worksheet->setCellValue('G' . $currentRow, $voluntary_work->hours);
                $worksheet->setCellValue('H' . $currentRow, $voluntary_work->position);
                $currentRow++;
            }
        } else{
            $worksheet->setCellValue('A6', 'N/A');
            $worksheet->setCellValue('E6', 'N/A');
            $worksheet->setCellValue('F6', 'N/A');
            $worksheet->setCellValue('G6', 'N/A');
            $worksheet->setCellValue('H6', 'N/A');
        }
    }

    protected function populateTrainingCertifications()
    {
        $worksheet = $this->worksheet;

        $startRow = 18;
        $endRow = 38;
        $currentRow = $startRow;

        if($this->personnel->trainingCertifications->isNotEmpty()){
            foreach ($this->personnel->trainingCertifications as $training_certification) {
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
                $worksheet->setCellValue('A' . $currentRow, $training_certification->training_seminar_title);
                $worksheet->setCellValue('E' . $currentRow, Carbon::parse($training_certification->inclusive_from)->format('m/d/Y'));
                $worksheet->setCellValue('F' . $currentRow, Carbon::parse($training_certification->inclusive_to)->format('m/d/Y'));
                $worksheet->setCellValue('G' . $currentRow, $training_certification->hours);
                $worksheet->setCellValue('H' . $currentRow, $training_certification->type);
                $worksheet->setCellValue('I' . $currentRow, $training_certification->sponsored);
                $currentRow++;
            }
        } else {
            $worksheet->setCellValue('A18', 'N/A');
            $worksheet->setCellValue('E18', 'N/A');
            $worksheet->setCellValue('F18', 'N/A');
            $worksheet->setCellValue('G18', 'N/A');
            $worksheet->setCellValue('H18', 'N/A');
            $worksheet->setCellValue('I18', 'N/A');
        }
    }

    protected function populateOtherInformation()
    {
        $worksheet = $this->worksheet;

        $startRow = 42;
        $endRow = 48;
        $currentRow = $startRow;


        if($this->personnel->otherInformations->isNotEmpty())
        {
            # SkillsInformation
            if ($this->personnel->skillsInformation) {
                foreach ($this->personnel->skillsInformation as $skills_information) {
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
                    $worksheet->setCellValue('A' . $currentRow, $skills_information->name);
                    $currentRow++;
                }
            } else {
                $worksheet->setCellValue('A' . $currentRow, 'N/A');
            }

            # NonacademicDistinctionInformation
            if ($this->personnel->nonacademicDistinctionInformation) {
                foreach ($this->personnel->nonacademicDistinctionInformation as $nonacademic_distinction_information) {
                    if ($currentRow > $endRow) {
                        // Create a new sheet or use the next existing sheet
                        $currentSheetIndex = $this->worksheet->getParent()->getIndex($worksheet) + 1;
                        if ($currentSheetIndex >= $this->worksheet->getParent()->getSheetCount()) {
                            $worksheet = $this->worksheet->getParent()->createSheet();
                            $worksheet->setTitle('Additional Nonacademic Distinction Information ' . ($currentSheetIndex + 1));
                        } else {
                            $worksheet = $this->worksheet->getParent()->getSheet($currentSheetIndex);
                        }
                        $currentRow = $startRow; // Reset the current row to the start row
                    }

                    // Populate the cell values
                    $worksheet->setCellValue('C' . $currentRow, $nonacademic_distinction_information->name);
                    $currentRow++;
                }
            } else {
                $worksheet->setCellValue('C' . $currentRow, 'N/A');
            }

            # AssociationInformation
            if ($this->personnel->associationInformation) {
                foreach ($this->personnel->associationInformation as $association_information) {
                    if ($currentRow > $endRow) {
                        // Create a new sheet or use the next existing sheet
                        $currentSheetIndex = $this->worksheet->getParent()->getIndex($worksheet) + 1;
                        if ($currentSheetIndex >= $this->worksheet->getParent()->getSheetCount()) {
                            $worksheet = $this->worksheet->getParent()->createSheet();
                            $worksheet->setTitle('Additional Association Information' . ($currentSheetIndex + 1));
                        } else {
                            $worksheet = $this->worksheet->getParent()->getSheet($currentSheetIndex);
                        }
                        $currentRow = $startRow; // Reset the current row to the start row
                    }

                    // Populate the cell values
                    $worksheet->setCellValue('I' . $currentRow, $association_information->name);
                    $currentRow++;
                }
            } else {
                $worksheet->setCellValue('I' . $currentRow, 'N/A');
            }
        } else {
            $worksheet->setCellValue('A42', 'N/A');
            $worksheet->setCellValue('C42', 'N/A');
            $worksheet->setCellValue('I42', 'N/A');
        }
    }
}
