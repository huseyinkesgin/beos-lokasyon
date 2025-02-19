<?php

namespace laravel\lokasyon\Models;

use Illuminate\Database\Eloquent\Model;
use laravel\lokasyon\Models\City;
use laravel\lokasyon\Models\District;
use laravel\lokasyon\Models\Town;

class Neighborhood extends Model
{
    protected $fillable = ['district_id', 'name', 'postal_code'];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function town()
    {
        return $this->belongsTo(Town::class)->through('district');
    }

    public function city()
    {
        return $this->belongsTo(City::class)->through('district.town');
    }
}
