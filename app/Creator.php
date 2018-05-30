<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    return $this->hasMany('App\Event')
}
