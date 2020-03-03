<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function requests()
    {
        return $this->hasMany('App\Request');
    }
    //
}
