<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\District;
use App\Models\Neighborhood;
use App\Models\Town;

class Customer extends Model
{
    protected $fillable = [
        'code',
        'customer_type',
        'company_id',
        'customer_group',
        'name',
        'tc_no',
        'phone',
        'email',
        'city_id',
        'district_id',
        'neighbourhood_id',
        'address',
        'description',
    ];
 // ----------------------- RELATIONS ---------------------------------------------- //
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

    // Arama için scope
    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%')
              ->orWhere('phone', 'like', '%' . $search . '%')
              ->orWhere('email', 'like', '%' . $search . '%')
              ->orWhere('tc_no', 'like', '%' . $search . '%');
        });
    }

    // Müşteri türü filtresi için scope
    public function scopeByType($query, $type)
    {
        return $query->when($type, function($q) use ($type) {
            return $q->where('customer_type', $type);
        });
    }

    // Kategori filtresi için scope
    public function scopeByCategory($query, $category)
    {
        return $query->when($category, function($q) use ($category) {
            return $q->where('category', $category);
        });
    }
}
