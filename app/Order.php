<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function consultation(){
        return $this->hasMany('App\Consultation');   
    }
    public function treatment(){
        return $this->belongsToMany('App\Treatment');   
    }
}
