<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    public function treatment(){
        return $this->belongsToMany('App\Treatment');   
    }
}
