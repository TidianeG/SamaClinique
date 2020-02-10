<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function user(){
        return $this->hasMany('App\User');   
    }

    public function folder(){
        return $this->hasMany('App\Folder');   
    }

    public function appointment(){
        return $this->hasMany('App\Appointment');   
    }
}
