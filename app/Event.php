<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    return $this->hasOne('App\Category')
}
