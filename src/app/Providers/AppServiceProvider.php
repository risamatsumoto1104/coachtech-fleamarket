<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Stripe\Stripe;

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
        // StripeのAPIキーを設定
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }
}
