<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = ['daterendez_appointment'];
    public function staff(){
        return $this->belongsTo('App\Staff');   
    }
    public function patient(){
        return $this->belongsTo('App\Patient');   
    }
}
