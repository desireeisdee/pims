<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    use HasFactory;
    protected $table = 'position';
    protected $fillable = ['title', 'classification'];

    public function personnels(): HasMany
    {
        return $this->hasMany(Personnel::class);
    }

    public function scopeSearch($query, $value){
        $query->where('id', "like", "%{$value}%")
               ->orWhere('title', "like", "%{$value}%");
    }
}
