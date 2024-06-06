<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelHistory extends Model
{
    use HasFactory;
    protected $table = 'personnel_history';
    protected $fillable = [
        'personnel_id',
        'school_id',
        'position_id',
        'employee_id',
        'appointment',
        'fund_source',
        'salary_grade',
        'step',
        'category',
        'job_status',
        'employment_start',
        'employment_end',
    ];

    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
    }

    public function scopeSearch($query, $value){
        $query->where('personnel_id', "like", "%{$value}%")
               ->orWhere('school_id', "like", "%{$value}%")
               ->orWhere('position_id', "like", "%{$value}%")
               ->orWhere('employee_id', "like", "%{$value}%")
               ->orWhere('appointment', "like", "%{$value}%")
               ->orWhere('fund_source', "like", "%{$value}%")
               ->orWhere('salary_grade', "like", "%{$value}%")
               ->orWhere('step', "like", "%{$value}%")
               ->orWhere('category', "like", "%{$value}%")
               ->orWhere('job_status', "like", "%{$value}%");
    }
}
