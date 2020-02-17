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
    public function consultation(){
        return $this->hasMany('App\Consultation');   
    }
    public function antecedent(){
        return $this->belongsToMany('App\Antecedent');   
    }
    public function followed(){
        return $this->hasMany('App\Followed');   
    }
    public function allergy(){
        return $this->belongsToMany('App\Allergy');   
    }
    public function analyse(){
        return $this->hasMany('App\Analysis');   
    }
}
