<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonneConfiance extends Model
{
    public function patient(){
        return $this->belongsToMany('App\Patient');
    }
}
