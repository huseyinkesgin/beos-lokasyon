<?php

namespace App\Models\Beos;

use Illuminate\Database\Eloquent\Model;
use App\Models\Beos\District;
use App\Models\Beos\City;
use App\Models\Beos\Town;

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
