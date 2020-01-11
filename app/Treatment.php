<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function order(){
        return $this->belongsToMany('App\Order');   
    }
    public function drug(){
        return $this->belongsToMany('App\Drug');   
    }

    public function staff(){
        return $this->belongsTo('App\Staff');   
    }

    public function patient(){
        return $this->belongsTo('App\Patient');   
    }

}
