<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\ContactUs;

class ComposerViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(
            ['frontend.partials.featured-products'],
            function ($view) {
                $featured_products = Product::where('status', 1)
                                            ->where('is_sold', 0)
                                            ->where('is_featured', 1)
                                            ->where('is_featured', 1)
                                            ->latest()
                                            ->take(15)
                                            ->get();

                $view->with('featured_products', $featured_products);
            }
        );

        view()->composer(
            ['frontend.partials.footer'],
            function ($view) {
                $contact_us =  ContactUs::select('facebook', 'twitter')->first();

                $view->with('contact_us', $contact_us);
            }
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
