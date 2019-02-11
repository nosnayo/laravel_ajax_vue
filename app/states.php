<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    protected $fillable = [
        'name', 'country_id',
    ];
}
