<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\User;
use Illuminate\Support\Facades\Gate;
use App\Staff;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Gate::define('admin',function(User $user){
            return $user->isAdmin();
        });
        //Gate::define('moderator', function(User $user){
            //return $user->isModerator();
        //});
        Gate::define('medecin', function(User $user){
            return $user->isMedecin();
        });
        Gate::define('secretaire', function(User $user){
            return $user->isSecretaire();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 
    }
}
