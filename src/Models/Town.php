<?php

namespace laravel\lokasyon\Models;

use Illuminate\Database\Eloquent\Model;
use laravel\lokasyon\Models\City;
use laravel\lokasyon\Models\District;
use laravel\lokasyon\Models\Neighborhood;

class Town extends Model
{
    protected $fillable = ['city_id', 'name'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function neighborhoods()
    {
        return $this->hasManyThrough(Neighborhood::class, District::class);
    }
}
