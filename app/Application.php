<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded = [];

    public function personal()
    {
        return $this->hasOne(AppPersonalDetails::class);
    }

    public function contact()
    {
        return $this->hasOne(AppContactDetails::class);
    }

    public function education()
    {
        return $this->hasMany(AppEducationHistory::class);
    }

    public function program()
    {
        return $this->hasOne(AppProgrameDetails::class);
    }
    
    public function referee()
    {
        return $this->hasMany(AppRefereeDetails::class);
    }
}
