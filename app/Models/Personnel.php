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

    public function voluntaryWorks(): HasMany
    {
        return $this->hasMany(VoluntaryWork::class);
    }

    public function trainingCertifications(): HasMany
    {
        return $this->hasMany(TrainingCertification::class);
    }

    public function skillsInformation()
    {
        return $this->hasOne(OtherInformation::class)->where('type', 'special_skill');
    }

    public function nonacademicDistinctionInformation()
    {
        return $this->hasOne(OtherInformation::class)->where('type', 'nonacademic_distinction');
    }

    public function associationInformation()
    {
        return $this->hasOne(OtherInformation::class)->where('type', 'association');
    }

    public function references(): HasMany
    {
        return $this->hasMany(Reference::class);
    }

    public function workExperiences(): HasMany
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function assignmentDetails(): HasMany
    {
        return $this->hasMany(AssignmentDetail::class);
    }

    public function awardReceived(): HasMany
    {
        return $this->hasMany(AwardReceived::class);
    }

    public function serviceRecords(): HasMany
    {
        return $this->hasMany(ServiceRecord::class);
    }

    public function scopeSearch($query, $value){
        $query->where('personnel_id', "like", "%{$value}%")
              ->orWhere(function ($query) use ($value) {
                    $query->whereRaw("CONCAT(first_name, ' ', SUBSTRING(middle_name, 1, 1), '. ', last_name) LIKE ?", ["%{$value}%"]);
                })
               ->orWhere('school_id', "like", "%{$value}%")
               ->orWhere('category', "like", "%{$value}%");
    }

    public static function getLoyaltyAwardRecipients($yearsOfService = 5)
    {
        $dateThreshold = Carbon::now()->subYears($yearsOfService);
        return self::where('date_of_joining', '<=', $dateThreshold)->get();
    }

    public function fullName()
    {
        return $this->first_name . ' '
                . ($this->middle_name ? $this->middle_name[0] . '. ' : '')
                . $this->last_name . ' '
                . $this->name_ext;

    }

}
