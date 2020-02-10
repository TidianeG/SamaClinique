<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    protected $guarded = [];
    public function folder(){
        return $this->belongsTo('App\Folder');   
    }
}
