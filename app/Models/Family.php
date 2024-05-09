<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Family extends Model
{
    use HasFactory;
    protected $fillable = ['relationship',
                           'first_name',
                           'middle_name',
                           'last_name',
                           'name_extension',
                           'occupation',
                           'employer_business_name',
                           'business_address',
                           'telephone_number',
                           'date_of_birth'
                        ];

    public function personnel(): BelongsTo
    {
        return $this->belongsTo(Personnel::class);
    }
}
