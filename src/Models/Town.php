<?php

namespace App\Models\Beos;

use Illuminate\Database\Eloquent\Model;
use App\Models\Beos\District;
use App\Models\Beos\Neighborhood;
use App\Models\Beos\City;

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
