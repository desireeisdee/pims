<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasFactory;
    protected $fillable = ['school_id',
                           'school_name',
                           'address',
                           'division',
                           'district_id',
                           'email',
                           'phone',
                           'curricular_classification'];
    protected $casts = ['curricular_classification' => 'json'];
    protected $hidden = ['created_at',
                         'updated_at'];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function personnels(): HasMany
    {
        return $this->hasMany(Personnel::class);
    }

    public function scopeSearch($query, $value){
        $query->where('school_id', "like", "%{$value}%")
                ->orWhere('school_name', 'like', "%{$value}%")
                ->orWhere('address', 'like', "%{$value}%");
    }
}
