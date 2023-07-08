<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\Category;
use App\SubCategory;
use Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasPermissionTo('view_dashboards')) {
            $totalProduct = $this->totalProductCount();
            $totalSoldProduct = $this->totalSoldProductCount();
            $totalFeaturedProduct = $this->totalFeaturedProductCount();
            $totalExpiredProduct = $this->totalExpiredProductCount();
            $totalUser = $this->totalUserCount();
            $totalCategory = $this->totalCategoryCount();
            $totalSubCategory = $this->totalSubCategoryCount();
            
            return view('backend.dashboard', compact(
                'totalProduct',
                'totalUser',
                'totalCategory',
                'totalSubCategory',
                'totalSoldProduct',
                'totalFeaturedProduct',
                'totalExpiredProduct'
            ));
        } else {
           abort('404');
        }
    }

    private function totalProductCount()
    {
        return Product::count();
    }

    private function totalUserCount()
    {
        return User::count();
    }

    private function totalCategoryCount()
    {
        return Category::count();
    }

    private function totalSubCategoryCount()
    {
        return SubCategory::count();
    }

    private function totalSoldProductCount()
    {
        return Product::where('is_sold', 1)->count();
    }

    private function totalExpiredProductCount()
    {
        return Product::where('expiry_period', '<', Carbon::now())->count();
    }

    private function totalFeaturedProductCount()
    {
        return Product::where('is_featured', 1)->count();
    }
}
