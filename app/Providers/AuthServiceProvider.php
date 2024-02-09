<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\ProductPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('product',[ProductPolicy::class,'viewAny']);

        Gate::define('catagory', function (User $user) {
            return $user->usertype===1;
        });
        Gate::define('admin', function (User $user) {
            return $user->usertype===1;
        });
    }
}
