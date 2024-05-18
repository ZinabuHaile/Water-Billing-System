<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Staff;
use App\Policies\UserPolicy;
use App\Policies\StaffPolicy;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    
    
    
    protected $policies = [
      User::class=>UserPolicy::class,
      Staff::class=>StaffPolicy::class,
    ];
    
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
