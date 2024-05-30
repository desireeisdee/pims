<?php

namespace App\Livewire\Form;

use Livewire\Component;
use App\Models\Personnel;
use App\Livewire\PersonnelNavigation;

class QuestionnaireForm extends PersonnelNavigation
{
    public $personnel;
    public $consanguinity_third_degree, $consanguinity_third_degree_details, $consanguinity_fourth_degree;
    public $found_guilty_administrative_offense, $administrative_offense_details, $criminally_charged, $criminally_charged_details, $criminally_charged_date_filed, $criminally_charged_status;
    public $convicted_crime, $convicted_crime_details, $separated_from_service, $separation_details;
    public $candidate_last_year, $candidate_details, $resigned_to_campaign, $resigned_campaign_details;
    public $immigrant_status, $immigrant_country_details;
    public $member_indigenous_group, $indigenous_group_details, $person_with_disability, $disability_id_no, $solo_parent;

    public function mount($id = null)
    {
        $this->personnel = Personnel::findOrFail($id);
        $personnel_detail = $this->personnel->personnelDetail;

        if($personnel_detail != null)
        {
            $this->consanguinity_third_degree = $personnel_detail->consanguinity_third_degree;
            $this->consanguinity_third_degree_details = $personnel_detail->consanguinity_third_degree_details;
            $this->consanguinity_fourth_degree = $personnel_detail->consanguinity_fourth_degree;
            // $this->consanguinity_fourth_degree_details = $personnel_detail->consanguinity_fourth_degree_details;
            $this->found_guilty_administrative_offense = $personnel_detail->found_guilty_administrative_offense;
            $this->administrative_offense_details = $personnel_detail->administrative_offense_details;
            $this->criminally_charged = $personnel_detail->criminally_charged;
            $this->criminally_charged_details = $personnel_detail->criminally_charged_details;
            $this->criminally_charged_date_filed = $personnel_detail->criminally_charged_date_filed;
            $this->criminally_charged_status = $personnel_detail->criminally_charged_status;
            $this->convicted_crime = $personnel_detail->convicted_crime;
            $this->convicted_crime_details = $personnel_detail->convicted_crime_details;
            $this->separated_from_service = $personnel_detail->separated_from_service;
            $this->separation_details = $personnel_detail->separation_details;
            $this->candidate_last_year = $personnel_detail->candidate_last_year;
            $this->candidate_details = $personnel_detail->candidate_details;
            $this->resigned_to_campaign = $personnel_detail->resigned_to_campaign;
            $this->resigned_campaign_details = $personnel_detail->resigned_campaign_details;
            $this->immigrant_status = $personnel_detail->immigrant_status;
            $this->immigrant_country_details = $personnel_detail->immigrant_country_details;
            $this->member_indigenous_group = $personnel_detail->member_indigenous_group;
            $this->indigenous_group_details = $personnel_detail->indigenous_group_details;
            $this->person_with_disability = $personnel_detail->person_with_disability;
            $this->disability_id_no = $personnel_detail->disability_id_no;
            $this->solo_parent = $personnel_detail->solo_parent;
        }
    }

    public function render()
    {
        return view('livewire.form.questionnaire-form');
    }
}
