<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'company',
        'city',
        'state',
        'zip',
        'address',
        'county',
        'phone',
        'fax',
        'name',
        'title',
        'gender',
        'employees',
        'sales',
        'industry',
    ];

    public function getRouteKeyName()
    {
        return 'state';
    }

    public function scopeForVendor($builder, $vendor){

        if($vendor){
            return $builder->where('state', $vendor->state);
        }

        return $builder;
    }
}
