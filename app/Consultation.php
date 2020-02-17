<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $guarded = ['date_consultation'];
    public function folder(){
        return $this->belongsTo('App\Folder');   
    }
    public function order(){
        return $this->belongsTo('App\Order');
    }
}
