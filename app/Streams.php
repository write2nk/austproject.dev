<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Streams extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';
}
