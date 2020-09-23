<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    public function employee()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
