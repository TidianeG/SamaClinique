<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\User;
use App\Staff;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','profil',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function staff(){
        return $this->belongsTo('App\Staff');   
    }

    public function isAdmin(){
        return strtolower(@$this->profil) === 'admin'? true : false;
     }
     
     /**Cett méthode va determiner si le user connecté a un role moderator*/
     public function isMedecin(){
        return strtolower(@$this->profil) === 'medecin'? true : false;
     }

     public function isSecretaire(){
         //dd($this->profil);
        return strtolower(@$this->profil) === 'secretaire'? true : false;
     }
     
}
