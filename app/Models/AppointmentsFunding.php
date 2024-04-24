<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppointmentsFunding extends Model
{
    use HasFactory;
    protected $fillable = ['school_id',
                           'title',
                           'appointment',
                           'fund_source',
                           'incumbent_teaching',
                           'incumbent_non_teaching'
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function scopeSearch($query, $value){
        $query->where('id', "like", "%{$value}%")
              ->orWhere('title', 'like', "%{$value}%")
              ->orWhere('appointment', 'like', "%{$value}%")
              ->orWhere('fund_source', 'like', "%{$value}%");
    }
}
