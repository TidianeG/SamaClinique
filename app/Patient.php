<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function folder(){
        return $this->hasMany('App\Folder');   
    }
    public function appointment(){
        return $this->hasMany('App\Appointment');
    }
    public function personneconfiance(){
        return $this->belongsToMany('App\PersonneConfiance');
    }
}
