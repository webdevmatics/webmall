<?php

namespace App\Providers;

use App\Shop;
use App\Policies\ShopPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use PhpParser\Node\Stmt\TryCatch;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        // Shop::class => ShopPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Gate::define('seller', function($user){

            $role = $user->role->name ?? '';

            if ($role == 'seller') {
                return true;
            }

            return false;
        });

        Gate::define('customer', function($user){

            $role = $user->role->name ?? '';

            if ($role == 'user') {
                return true;
            }

            return false;
        });

        Gate::define('admin', function($user){

            $role = $user->role->name ?? '';

            if ($role == 'admin') {
                return true;
            }

            return false;
        });
    }
}
