<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function firm()
    {
        return $this->belongsTo('App\Models\Firm');
    }
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
    public function change()
    {
        return $this->belongsTo('App\Models\Change');
    }
}
