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
}
