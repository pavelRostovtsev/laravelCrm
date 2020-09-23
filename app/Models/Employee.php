<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{   
    public function firms()
    {
        return $this->belongsTo('App\Models\Firm');
    }
    public function event()
    {
        return $this->hasMany('App\Models\Event');
    }    
}
