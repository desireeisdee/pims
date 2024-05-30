<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Carbon\Carbon;


class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        // Personal Information
        'first_name',
        'middle_name',
        'last_name',
        'name_ext',
        'sex',
        'civil_status',
        'citizenship',
        'blood_type',
        'height',
        'weight',
        'date_of_birth',
        'place_of_birth',
        'email',
        'tel_no',
        'mobile_no',

        // Work Information
        'personnel_id',
        'school_id',
        'position_id',
        'appointment',
        'fund_source',
        'salary_grade',
        'step',
        'category',
        'job_status',
        'classification',
        'employment_start',
        'employment_end',

        // Government Information
        'tin',
        'sss_num',
        'gsis_num',
        'philhealth_num',
        'pagibig_num'
    ];
    protected $dates = [
        'employment_start_date',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function addresses()
    {
        return $this->hasOne(Address::class);
    }

    public function permanentAddress()
    {
        return $this->hasOne(Address::class)->where('address_type', 'permanent');
    }

    public function residentialAddress()
    {
        return $this->hasOne(Address::class)->where('address_type', 'residential');
    }

    public function contactPerson(): HasOne
    {
        return $this->hasOne(ContactPerson::class);
    }

    public function families(): HasMany
    {
        return $this->hasMany(Family::class);
    }

    public function father()
    {
        return $this->hasOne(Family::class)->where('relationship', 'father');
    }

    public function mother()
    {
        return $this->hasOne(Family::class)->where('relationship', 'mother');
    }

    public function spouse()
    {
        return $this->hasOne(Family::class)->where('relationship', 'spouse');
    }

    public function children()
    {
        return $this->hasMany(Family::class)->where('relationship', 'children');
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function elementaryEducation()
    {
        return $this->hasOne(Education::class)->where('type', 'elementary');
    }

    public function secondaryEducation()
    {
        return $this->hasOne(Education::class)->where('type', 'secondary');
    }

    public function vocationalEducation()
    {
        return $this->hasOne(Education::class)->where('type', 'vocational/trade');
    }

    public function graduateEducation()
    {
        return $this->hasOne(Education::class)->where('type', 'graduate');
    }

    public function graduateStudiesEducation()
    {
        return $this->hasOne(Education::class)->where('type', 'graduate studies');
    }

    public function civilServiceEligibilities(): HasMany
    {
        return $this->hasMany(CivilServiceEligibility::class);
    }

    public function workExperiences(): HasMany
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function voluntaryWorks(): HasMany
    {
        return $this->hasMany(VoluntaryWork::class);
    }

    public function trainingCertifications(): HasMany
    {
        return $this->hasMany(TrainingCertification::class);
    }

    public function otherInformations(): HasMany
    {
        return $this->hasMany(OtherInformation::class);
    }

    public function skills()
    {
        return $this->hasOne(OtherInformation::class)->where('type', 'special_skill');
    }

    public function nonacademicDistinctions()
    {
        return $this->hasOne(OtherInformation::class)->where('type', 'nonacademic_distinction');
    }

    public function associations()
    {
        return $this->hasOne(OtherInformation::class)->where('type', 'association');
    }

    public function personnelDetail() //For Questionnaire
    {
        return $this->hasOne(PersonnelDetail::class);
    }

    public function references(): HasMany
    {
        return $this->hasMany(Reference::class);
    }

    public function assignmentDetails(): HasMany
    {
        return $this->hasMany(AssignmentDetail::class);
    }

    // public function awardReceived(): HasMany
    // {
    //     return $this->hasMany(AwardReceived::class);
    // }

    public function serviceRecords(): HasMany
    {
        return $this->hasMany(ServiceRecord::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($personnel) {
            // Check if any of the specified attributes are being changed
            $attributes = ['position_id', 'salary_grade', 'appointment', 'school_id', 'district_id', 'job_status'];
            $isDirty = false;
            foreach ($attributes as $attribute) {
                if ($personnel->isDirty($attribute)) {
                    $isDirty = true;
                    break;
                }
            }

            dd('IsDirty:', $isDirty, 'Changed Attributes:', $personnel->getDirty());

            if ($isDirty) {
                // Get the current date
                $currentDate = now();

                // // Find the current active service record
                // $currentServiceRecord = $personnel->serviceRecords()->whereNull('to_date')->first();

                // if ($currentServiceRecord) {
                //     // Update the end date of the current service record
                //     $currentServiceRecord->update(['to_date' => $currentDate]);
                // }


                // Create a new service record
                $personnel->serviceRecords()->create([
                    'personnel_id' => $personnel->id,
                    'from_date' => $currentDate,
                    'to_date' => null,
                    'designation' => $personnel->position_id,
                    'appointment_status' => $personnel->appointment,
                    'salary' => $personnel->salary_grade,
                    'station' => $personnel->school->district_id,
                    'branch' => $personnel->school->id
                ]);
            }
        });
    }

    public function scopeSearch($query, $value){
        $query->where('personnel_id', "like", "%{$value}%")
              ->orWhere(function ($query) use ($value) {
                    $query->whereRaw("CONCAT(first_name, ' ', SUBSTRING(middle_name, 1, 1), '. ', last_name) LIKE ?", ["%{$value}%"]);
                })
               ->orWhere('school_id', "like", "%{$value}%")
               ->orWhere('category', "like", "%{$value}%");
    }

    public static function getLoyaltyAwardees()
    {
        $currentYear = Carbon::now()->year;
        return self::whereNotNull('employment_start')
            ->whereRaw("TIMESTAMPDIFF(YEAR, employment_start, CURDATE()) % 10 = 0")
            ->whereRaw("YEAR(employment_start) <= $currentYear")
            ->get();
    }

    public function fullName()
    {
        return $this->first_name . ' '
                . ($this->middle_name ? $this->middle_name[0] . '. ' : '')
                . $this->last_name . ' '
                . $this->name_ext;

    }


}
