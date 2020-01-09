<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function staff(){
        return $this->belongsTo('App\Staff');   
    }

    public function patient(){
        return $this->belongsTo('App\Patient');   
    }

    public function treatment(){
        return $this->belongsToMany('App\Treatment');   
    }
}
