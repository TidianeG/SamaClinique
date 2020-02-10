<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function folder(){
        return $this->belongsTo('App\Folder');   
    }
}