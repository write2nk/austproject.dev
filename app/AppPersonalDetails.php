<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppPersonalDetails extends Model
{

    protected $guarded = [];

    protected $dates = ['date_of_birth', 'created_at', 'updated_at'];
}
