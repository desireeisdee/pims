<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FundedItem extends Model
{
    use HasFactory;
    protected $fillable = ['school_id',
                            'title',
                            'non_teaching',
                            'incumbent'
                        ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function scopeSearch($query, $value){
        $query->where('id', "like", "%{$value}%")
              ->orWhere('title', 'like', "%{$value}%")
              ->orWhere('non_teaching', 'like', "%{$value}%");
    }
}
