<?php

namespace App\Providers;

use function foo\func;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Gate::define('request-owner',function ($user,$request_id){
            $item = $user->requests->where('id',$request_id)->first();
            if(is_null($item)){
                return false;
            }else{
                return true;
            }
        });


        Gate::define('set-release',function ($user,$request_id){
            $request = $user->requests->where('id',$request_id)->first();
            if(!is_null($request)){
                if($request->warranty){
                    return false;
                }else{
                    return true;
                }
            }else{
                return false;
            }

        });
    }
}
