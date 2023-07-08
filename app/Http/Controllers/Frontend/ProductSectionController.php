<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Auth;
use DB;
use App\Category;
use App\SubCategory;
use Carbon\Carbon;
use SEOMeta;
use OpenGraph;

class ProductSectionController extends Controller
{
    /**
     * Show the categories and sub-categories lists.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCategories()
    {
        $this->seoAddCategory();

        $categories = Category::where('status', 1)->get()->pluck('title', 'id');
        $sub_categories = SubCategory::where('status', 1)->get()->pluck('title', 'id');

        return view('frontend.product-section.add-category', compact('categories', 'sub_categories'));
    }

     /**
     * Get the sub-categories of the particular category
     *
     * @return \Illuminate\Http\Response
     */
    public function getSubCategories($category_id)
    {
        $sub_categories = SubCategory::where('category_id', $category_id)->select('id', 'title')->get();

        return response()->json([
            'sub_categories'=>$sub_categories
        ], 200);
    }

    /**
     * Redirect the form to create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectProductForm(Request $request)
    {
        $this->validate($request, [
            'category' => 'required|integer',
        ]);       

        if(isset($request->sub_category)) {
            $sub_category = SubCategory::find(request('sub_category'));
            
            return redirect()->route('product-section.create', $sub_category->slug);
        } else {
            $category = Category::find(request('category'));
            
            return redirect()->route('product-section.create', $category->slug);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($subCategorySlug)
    {
        $this->seoAddProduct($subCategorySlug);

        $sub_category = SubCategory::where('slug', $subCategorySlug)->first();
        $expiry_periods = Product::ExpiryPeriod;
        $condition_types = Product::ConditionType;
        $time_periods = Product::TimePeriod;
        $delivery_areas = Product::DeliveryArea;
        $warranty_types = Product::WarrantyTypes;

        if(isset($sub_category)) { 
            $sub_category = $sub_category;

            return view('frontend.product-section.create', compact('sub_category', 'expiry_periods', 'condition_types', 'time_periods', 'delivery_areas', 'warranty_types'));
        } else {
            $category = Category::where('slug', $subCategorySlug)->first();

            return view('frontend.product-section.create', compact('category', 'expiry_periods', 'condition_types', 'time_periods', 'delivery_areas', 'warranty_types'));
        }    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::find(request('category'));

        //Automobiles Only
        if ($category->slug == 'automobiles') {
            $this->validate($request, [
                'make_year'               => 'required|numeric',
            ]);
        }

        //Automobiles & Computer-Equipments & Electronics & Fashion-Wear & Mobile-Accessories
        if ($category->slug == 'automobiles' ||
            $category->slug == 'computer-equipments' ||
            $category->slug == 'electronics' ||
            $category->slug == 'fashion-wear' ||
            $category->slug == 'mobile-accessories'
        ) {
            $this->validate($request, [
                'manufacturer'            => 'nullable|min:2|max:255',
            ]);
        }

        //Automobiles & Beauty-Health & Book-Stationary & Computer-Equipments & Electronics  & Fashion Wear & Home-Appliances & Mobile-Accessories & Music-Instruments & Sport-Fitness & Toys-Games
        if ($category->slug == 'automobiles' ||
            $category->slug == 'beauty-health' ||
            $category->slug == 'book-stationary' ||
            $category->slug == 'computer-equipments' ||
            $category->slug == 'electronics' ||
            $category->slug == 'fashion-wear' ||
            $category->slug == 'home-appliances' ||
            $category->slug == 'mobile-accessories' ||
            $category->slug == 'music-instruments' ||
            $category->slug == 'sport-fitness' ||
            $category->slug == 'toys-games'

        ) {
            $this->validate($request, [
                'usedFor_period'          => 'nullable|numeric',
                'warranty_period'         => 'nullable|numeric',
                'delivery_charge'         => 'nullable|numeric',                
            ]);   
        }

        //Fashion Wear Only
        if ($category->slug == 'fashion-wear') {
            $this->validate($request, [
                'quantity'                 => 'nullable|numeric',
            ]);
        }

        //Food-Drinks & Pet-PetCare
        if ($category->slug == 'food-drinks' ||
            $category->slug == 'pet-pet-care'
        ) {
            $this->validate($request, [
               'delivery_charge'         => 'nullable|numeric',
            ]);
        }

        //Real State Only
        if ($category->slug == 'real-state') {
            $this->validate($request, [
                'location'   => 'required|min:2',
            ]);
        }

        $this->validate($request, [
            'category'                => 'required',
            'title'                   => 'required|min:2|max:255',
            'description'             => 'required|min:2',
            'price'                   => 'required|numeric|min:1',
            'condition_type'          => 'required',
            'is_negotiable'           => 'nullable',
            'expiry_period'           => 'required',
            'features'                => 'nullable|min:2',           
        ]);

        $expiryPeriod = [
            Carbon::now()->addMonth(1),
            Carbon::now()->addMonth(2),
            Carbon::now()->addMonth(4),
            Carbon::now()->addMonth(6),
            Carbon::now()->addWeek(1),
            Carbon::now()->addWeek(2),
        ];

        DB::beginTransaction();
        try {
            $product = Product::create(
                [
                    'category_id'             => request('category'),
                    'sub_category_id'         => request('sub_category') ? request('sub_category') : 0,
                    'title'                   => request('title'),
                    'slug'                    => $this->setSlugAttribute(request('title')),
                    'description'             => request('description'),
                    'price'                   => request('price'),
                    'condition_type'          => request('condition_type'),
                    'is_negotiable'           => request('is_negotiable') ? 1 : 0,
                    'expiry_period'           => $expiryPeriod[request('expiry_period')],
                    'expiry_period_type'      => request('expiry_period'),
                    'features'                => request('features'),
                    'status'                  => 1,
                    
                    //Automobiles Only
                    'kilometer_run'           => request('kilometer_run'),
                    'make_year'               => request('make_year'),
                    'color'                   => request('color'),

                    //Automobiles & Computer-Equipments & Electronics & Fashion-Wear & Mobile-Accessories
                    'manufacturer'            => request('manufacturer'),

                    //Automobiles & Beauty-Health & Book-Stationary & Computer-Equipments & Electronics  & Fashion Wear & Home-Appliances & Mobile-Accessories & Music-Instruments & Sport-Fitness & Toys-Games
                    'usedFor_period'          => request('usedFor_period'),
                    'usedFor_period_type'     => request('usedFor_period_type'),
                    'warranty_type'           => request('warranty_type'),
                    'warranty_period'         => request('warranty_period'),
                    'warranty_period_type'    => request('warranty_period_type'),

                    //Automobiles & Beauty-Health & Book-Stationary & Computer-Equipments & Electronics  & Fashion Wear & Home-Appliances & Mobile-Accessories & Music-Instruments & Sport-Fitness & Toys-Games & Food-Drinks & Pet-PetCare
                    'has_home_delivery'       => request('has_home_delivery') ? 1 : 0,
                    'delivery_area'           => request('delivery_area'),
                    'delivery_charge'          => request('delivery_charge'),

                    //Fashion Wear Only
                    'quantity'                => request('quantity'),

                    //Fashion Wear & Real State
                    'size'                    => request('size'),

                    //Real State Only
                    'location'                => request('location'),

                    'created_by'              => Auth::user()->id,
                    'updated_by'              => Auth::user()->id,
                ]
            );

            DB::commit();
            $notification = array(
                'message'    => 'Product added successfully. Please add images if you have.',
                'alert-type' => 'success'
            );
            
            return redirect()->route('product-section.addImages', $product->slug)->with($notification);

        } catch (\Exception $exception) {
            DB::rollback();
            logger()->error($exception->getMessage());
            
            $notification = array(
                'message'    => 'Internal Error, Please try again later.',
                'alert-type' => 'error'
            );  
            
            return redirect()->route('frontend.home')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addImages($productSlug)
    {
        $this->seoAddImages($productSlug);

        $product = Product::where('slug', $productSlug)->where('created_by', Auth::user()->id)->firstOrFail();
        $productImages = $product->images;
        $productId = $product->id;
        $productImagesUrls = [];
        $productImagesInformations = [];

        foreach ($productImages as $key => $productImage) {
            array_push($productImagesInformations, [
                'caption' => $productImage->original_filename,

                'url' => route('product-section.destroyImages', ['productId' => $productId, 'imageId' => $productImage->id])
            ]);
            array_push($productImagesUrls,"/storage/media/product/".$productId."/".$productImage->filename);
        }

        return view('frontend.product-section.add-image', compact('productId', 'productSlug', 'productImagesUrls', 'productImagesInformations'));
    }

    /**
     * Upload and save images.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveImages(Request $request, $productId)
    {
        if ($request->file('product_image')) {
            $fileData = $request->file('product_image');
            $productImage = saveFile($fileData, 'product', $productId);

            $productImage->products()->attach($productId);
        }

        $data = [
            'caption' => $productImage->original_filename,
            'url' => route('products.destroyImages', ['productId' => $productId, 'imageId' => $productImage->id])
        ];

        return response()->json([
            'initialPreview' => "/storage/media/product/".$productId."/".$productImage->filename,
            'initialPreviewConfig' => [
                $data
            ]
        ]);
    }

    /**
     * Destroy the specified image.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destoryImages($productId, $imageId)
    {
        $productImage = removeFile($imageId);
        $productImage->products()->detach($productId);

        return response()->json(['success' => true]);
    }

    /**
     * Creating the unique slug.
     *
     */
    private function setSlugAttribute($slug)
    {
        $slug = str_slug($slug);
        $slugs = Product::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                    ->orderBy('id')
                    ->pluck('slug');
        if (count($slugs) == 0) {
            return $slug;
        } elseif (! $slugs->isEmpty()) {
            $pieces = explode('-', $slugs);
            $number = (int) end($pieces);
            return $slug .= '-' . ($number + 1);
        }
    }

    private function seoAddCategory()
    {
        SEOMeta::setTitle('Choose Category -'.env('APP_NAME'));
        SEOMeta::setDescription(env('APP_NAME').' - Choose the category before adding the products.');
        SEOMeta::setCanonical(route('product-section.addCategories'));
        SEOMeta::addKeyword(['obsnepal', 'category', 'subCategory', 'buy', 'sell', 'brand', 'new', 'used', 'kathmandu', 'pokhara', 'secondhand', 'cheap', 'popular', 'product']);

        OpenGraph::setTitle('Choose Category -'.env('APP_NAME'));
        OpenGraph::setDescription(env('APP_NAME').' - Choose the category before adding the products.');
        OpenGraph::setUrl(route('product-section.addCategories'));
    }

    private function seoAddProduct($subCategorySlug)
    {
        SEOMeta::setTitle('Post New Product -'.env('APP_NAME'));
        SEOMeta::setDescription(env('APP_NAME').' - Input product title, description, features, price and other necessary details.');
        SEOMeta::setCanonical(route('product-section.create', $subCategorySlug));
        SEOMeta::addKeyword(['obsnepal', 'productform','title', 'description', 'features', 'price', 'otherDetails', 'buy', 'sell', 'brand', 'new', 'used', 'kathmandu', 'pokhara', 'secondhand', 'cheap', 'popular', 'product']);

        OpenGraph::setTitle('Post New Product -'.env('APP_NAME'));
        OpenGraph::setDescription(env('APP_NAME').' - Input product title, description, features, price and other necessary details.');
        OpenGraph::setUrl(route('product-section.create', $subCategorySlug));
    }

    private function seoAddImages($productSlug)
    {
        SEOMeta::setTitle('Manage Images -'.env('APP_NAME'));
        SEOMeta::setDescription(env('APP_NAME').' - Add the images of your product if any. Delete the existing image.');
        SEOMeta::setCanonical(route('product-section.addImages', $productSlug));
        SEOMeta::addKeyword(['obsnepal', 'images', 'buy', 'sell', 'brand', 'new', 'used', 'kathmandu', 'pokhara', 'secondhand', 'cheap', 'popular', 'product']);

        OpenGraph::setTitle('Manage Images -'.env('APP_NAME'));
        OpenGraph::setDescription(env('APP_NAME').' - Add the images of your product if any. Delete the existing image.');
        OpenGraph::setUrl(route('product-section.addImages', $productSlug));
    }
}
