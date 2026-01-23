<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         View::composer('*', function ($view) {
            $cartItems = Cart::latest()->get();
            $view->with('cartItems', $cartItems);
        });
        /*
        |--------------------------------------------------------------------------
        | Share Cart Data With Shopping Cart Offcanvas
        |--------------------------------------------------------------------------
        | This ensures $cartItems and $total are available
        | in frontend.partials.shoppingcart on ALL pages
        */
    //     View::composer('frontend.partials.shoppingcart', function ($view) {

    //         // If user-based cart (recommended)
    //         $cartItems = Cart::query()
    //             ->when(auth()->check(), function ($q) {
    //                 $q->where('user_id', auth()->id());
    //             })
    //             ->get();

    //         $total = $cartItems->sum(function ($item) {
    //             return $item->price * $item->qty;
    //         });

    //         $view->with([
    //             'cartItems' => $cartItems,
    //             'total'     => $total,
    //         ]);
    //     });
     }
}
