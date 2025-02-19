<?php

namespace laravel\lokasyon\Models;

use Illuminate\Database\Eloquent\Model;
use laravel\lokasyon\Models\District;
use laravel\lokasyon\Models\Neighborhood;
use laravel\lokasyon\Models\Town;

class City extends Model
{
    protected $fillable = ['name'];

  
    public function towns()
    {
        return $this->hasMany(Town::class);
    }

    public function districts()
    {
        return $this->hasManyThrough(District::class, Town::class);
    }

    public function neighborhoods()
    {
        return $this->hasManyThrough(Neighborhood::class, District::class, 'town_id', 'district_id');
    }

    public function scopeCustomOrder($query)
    {
        return $query->orderByRaw("
            CASE 
                WHEN name = 'İSTANBUL' THEN 1
                WHEN name = 'KOCAELİ' THEN 2
                ELSE 3
            END
        ")->orderBy('name');
    }
}
