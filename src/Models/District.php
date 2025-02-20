<?php

namespace App\Models\Beos;

use Illuminate\Database\Eloquent\Model;
use App\Models\Beos\City;
use App\Models\Beos\Neighborhood;
use App\Models\Beos\Town;

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
