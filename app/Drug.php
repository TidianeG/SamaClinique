<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $guarded = ['nom'];
    public function treatment(){
        return $this->belongsToMany('App\Treatment');   
    }
}
