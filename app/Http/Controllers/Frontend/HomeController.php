<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Carbon\Carbon;
use SEOMeta;
use OpenGraph;

class HomeController extends Controller
{
    public function index()
    {
        $this->seoIndex();

    	$latest_products = Product::where('status', 1)
                                    ->where('is_sold', 0)
                                    ->where('expiry_period', '>', Carbon::now())
                                    ->latest()
                                    ->take(config('product.home_product'))
                                    ->get();

    	$popular_products = Product::where('status', 1)
                                    ->where('is_sold', 0)
                                    ->where('expiry_period', '>', Carbon::now())
                                    ->orderByViewsCount()
                                    ->take(config('product.home_product'))
                                    ->get();

    	if(session()->has('products.recently_viewed')) {
    		$recentlyViewedIds = session()->get('products.recently_viewed');
    		$recentlyViewed_products = Product::latest()
                                                ->where('status', 1)
                                                ->where('is_sold', 0)
                                                ->where('expiry_period', '>', Carbon::now())
                                                ->whereIn('id', $recentlyViewedIds)
                                                ->take(config('product.home_product'))
                                                ->get();
    	} else {
    		$recentlyViewed_products = [];
    	}

    	$categories = Category::where('status', 1)->get();

        return view('frontend.home', compact('latest_products', 'popular_products', 'recentlyViewed_products', 'categories'));
    }

    private function seoIndex()
    {
        SEOMeta::setTitle('Buy and Sell Your Products in Nepal -'.env('APP_NAME'));
        SEOMeta::setDescription(env('APP_NAME').' - Buy and Sell your products in Nepal. Sell the used or brand new products, contact the buyer yourself and look for the products of your desire.');
        SEOMeta::setCanonical(route('frontend.home'));
        SEOMeta::addKeyword(['obsnepal', 'nepal', 'buy', 'sell', 'brand', 'new', 'used', 'kathmandu', 'pokhara', 'secondhand', 'cheap', 'popular', 'product']);
        
        OpenGraph::setTitle('Buy and Sell Your Products in Nepal -'.env('APP_NAME'));
        OpenGraph::setDescription(env('APP_NAME').' - Buy and Sell your products in Nepal. Sell the used or brand new products, contact the buyer yourself and look for the products of your desire.');
        OpenGraph::setUrl(route('frontend.home'));
    }
}
