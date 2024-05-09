<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = ['personnel_id',
                           'first_name',
                           'middle_name',
                           'last_name',
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
                           'employment_start',
                           'employment_end',
                           'job_title',
                           'job_status',
                           'school_id'];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function contact_person(): HasOne
    {
        return $this->hasOne(ContactPerson::class);
    }

    public function families(): HasMany
    {
        return $this->hasMany(Family::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function civil_servise_eligibilities(): HasMany
    {
        return $this->hasMany(CivilServiceEligibility::class);
    }

    public function voluntary_works(): HasMany
    {
        return $this->hasMany(VoluntaryWork::class);
    }

    public function training_certifications(): HasMany
    {
        return $this->hasMany(TrainingCertification::class);
    }

    public function references(): HasMany
    {
        return $this->hasMany(Reference::class);
    }

    public function assignment_details(): HasMany
    {
        return $this->hasMany(AssignmentDetail::class);
    }

    public function scopeSearch($query, $value){
        $query->where('personnel_id', "like", "%{$value}%")
              ->orWhere(function ($query) use ($value) {
                    $query->whereRaw("CONCAT(first_name, ' ', SUBSTRING(middle_name, 1, 1), '. ', last_name) LIKE ?", ["%{$value}%"]);
                })
                ->orWhere('job_title', 'like', "%{$value}%")
                ->orWhere('job_status', 'like', "%{$value}%");
    }

    public function fullName()
    {
        return $this->first_name . ' ' . $this->middle_name[0] . '. ' . $this->last_name;
    }

}
