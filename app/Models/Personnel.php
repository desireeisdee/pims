<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = ['personnel_id',
                           'first_name',
                           'middle_name',
                           'last_name',
                           'date_of_birth',
                           'sex',
                           'address',
                           'email',
                           'phone',
                           'employment_start',
                           'employment_end',
                           'job_title',
                           'job_status',
                           'division',
                           'district',
                           'school'];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
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
