<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkExperience extends Model
{
    use HasFactory;
    protected $fillable = ['title',
                           'company',
                           'inclusive_from',
                           'inclusive_to',
                           'monthly_salary',
                           'paygrade_step_increment',
                           'appointment',
                           'is_gov_service'
                        ];

    public function personnel(): BelongsTo
    {
        return $this->belongsTo(Personnel::class);
    }
}
