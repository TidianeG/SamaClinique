<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $guarded = ['groupesang_folder'];
    public function staff(){
        return $this->belongsTo('App\Staff');   
    }

    public function patient(){
        return $this->belongsTo('App\Patient');   
    }
}
