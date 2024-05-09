<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['type',
                           'school_name',
                           'degree_course',
                           'period_from',
                           'period_to',
                           'highest_level_units',
                           'year_graduated',
                           'scholarship_honors'
                        ];

    public function personnel(): BelongsTo
    {
        return $this->belongsTo(Personnel::class);
    }
}
