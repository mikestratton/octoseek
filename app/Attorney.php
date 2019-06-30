<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attorney extends Model
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
        'website',
        'name_last',
        'name_first',
        'title',
        'gender',
        'employees',
        'sales',
        'industry',
        'sic_code',
        'sic_description',
        'credit_score_alpha',
        'credit_score_numeric',
        'location_details',
        'square_ft',
    ];
}
