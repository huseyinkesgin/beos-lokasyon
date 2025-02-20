<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Neighborhood;
use App\Models\Town;

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
