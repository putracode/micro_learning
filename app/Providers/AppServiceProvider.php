<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Pagination\Paginator;
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
        
        view()->composer('layout.sneat', function ($view) {
            $user = user::all()->where('is_approve','Not Approved')->count();
            return $view->with('permohonan',$user);
        });
        
        view()->composer('layout.page', function ($view) {
            $user = user::all()->where('is_approve','Not Approved')->count();
            return $view->with('permohonan',$user);
        });

        view()->composer('app.home', function ($view) {
            $user = user::all()->where('is_approve','Not Approved')->count();
            return $view->with('permohonan',$user);
        });

        Paginator::useBootstrapFive();
    }
}
