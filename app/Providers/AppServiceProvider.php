<?php

namespace App\Providers;

use App\Models\Cart;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\Blade;
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
        View::composer('*', function ($view) {
           $view->with('cart', Cart::bySession()->first());
        });

        Blade::directive('money', function ($expression) {
            return "<?php echo Laravel\Cashier\Cashier::formatAmount($expression, 'gbp'); ?>";
        });
    }
}
