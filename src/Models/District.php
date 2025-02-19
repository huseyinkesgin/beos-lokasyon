<?php

namespace laravel\lokasyon\Models;


namespace laravel\lokasyon\Models;
use laravel\lokasyon\Models\Town;
use laravel\lokasyon\Models\City;
use laravel\lokasyon\Models\Neighborhood;

class District extends Model
{
    protected $fillable = ['town_id', 'name'];

 
    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class)->through('town');
    }

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }
}
