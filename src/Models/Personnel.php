<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\City;
use App\Models\District;
use App\Models\Neighbourhood;
use App\Models\Town;

class Personnel extends Model
{
    protected $fillable = [
        'code',
        'name',
        'tc_no',
        'email',
        'phone',
        'city_id',
        'district_id',
        'neighbourhood_id',
        'address',
        'image',
        'status',
        'description',
        'start_date',
        'end_date',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function neighbourhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%')
              ->orWhere('phone', 'like', '%' . $search . '%')
              ->orWhere('email', 'like', '%' . $search . '%');
        });
    }

    public function getServiceDurationAttribute()
    {
        if (!$this->hire_date) return null;

        $hireDate = Carbon::parse($this->hire_date);
        $years = (int)$hireDate->diffInYears(now());
        $months = (int)$hireDate->copy()->addYears($years)->diffInMonths(now());

        $duration = [];
        if ($years > 0) $duration[] = $years . ' yıl';
        if ($months > 0) $duration[] = $months . ' ay';
        
        return empty($duration) ? '1 aydan az' : implode(' ', $duration);
    }
}
