<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasFactory;
    protected $fillable = ['school_id',
                           'school_name',
                           'address',
                           'region',
                           'division',
                           'district',
                           'email',
                           'phone',
                           'general_curricular_offering',
                           'curricular_classification'];
    protected $casts = ['curricular_classification' => 'json'];

    public function personnels(): HasMany
    {
        return $this->hasMany(Personnel::class);
    }

    public function funded_items(): HasMany
    {
        return $this->hasMany(FundedItem::class);
    }

    public function appointments_fundings(): HasMany
    {
        return $this->hasMany(AppointmentsFunding::class);
    }

    public function scopeSearch($query, $value){
        $query->where('school_id', "like", "%{$value}%")
                ->orWhere('school_name', 'like', "%{$value}%")
                ->orWhere('address', 'like', "%{$value}%");
    }
}
