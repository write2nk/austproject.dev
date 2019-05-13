<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppPersonalDetails extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //AppPersonalDetails -> AppContactDetails
    public function contact()
    {
        return $this->hasOne(AppContactDetails::class);
    }

    //AppPersonalDetails -> AppEducationDetails
    public function education()
    {
        return $this->hasMany(AppEducationHistory::class);
    }


    //AppPersonalDetails -> AppProgrammeDetails
    public function program()
    {
        return $this->hasOne(AppProgrameDetails::class);
    }

    //AppPersonalDetails -> AppRefereeDetails
    public function referee()
    {
        return $this->hasMany(AppRefereeDetails::class);
    }
}
