<?php

namespace App\Providers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin',function(User $user){
            return $user->role === 'admin';
        });

        Gate::define('internal',function(User $user){
            return $user->pengguna === 'Internal';
        });
        

        $greetings = "";

        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = date("H");

        /* Set the $timezone variable to become the current timezone */
        $timezone = date("e");

        /* If the time is less than 1200 hours, show good morning */
        if ($time < "11") {
            $greetings = "Selamat pagi";
        } else
    
        /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
        if ($time >= "11" && $time < "15") {
            $greetings = "Selamat siang";
        } else
    
        /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
        if ($time >= "15" && $time < "19") {
            $greetings = "Selamat sore";
        } else
    
        /* Finally, show good night if the time is greater than or equal to 1900 hours */
        if ($time >= "19") {
            $greetings = "Selamat malam";
        }
        
        View::share('salam', $greetings);
    }
}
