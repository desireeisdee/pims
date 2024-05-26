<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Validation\ValidationException;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';
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

    public static function boot()
    {
        parent::boot();

        static::creating(function ($education) {
            $education->validateTypeConstraint();
        });

        static::updating(function ($education) {
            $education->validateTypeConstraint();
        });
    }

    protected function validateTypeConstraint()
    {
        $existingEducation = self::where('personnel_id', $this->personnel_id)
            ->where('type', $this->type)
            ->exists();

        if ($existingEducation) {
            throw ValidationException::withMessages([
                'type' => 'This type of education already exists for the personnel.',
            ]);
        }
    }
}
