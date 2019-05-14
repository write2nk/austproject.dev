<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';
}
