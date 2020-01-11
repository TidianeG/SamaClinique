<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function user(){
        return $this->hasMany('App\User');   
    }

    public function consultation(){
        return $this->hasMany('App\Consultation');   
    }

    public function folder(){
        return $this->hasMany('App\Folder');   
    }

    public function analysis(){
        return $this->hasMany('App\Analysis');   
    }

    public function appointment(){
        return $this->hasMany('App\Appointment');   
    }

    public function order(){
        return $this->hasMany('App\Treatment');
    }
}
