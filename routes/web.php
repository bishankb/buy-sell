<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => ['auth']
], function(){
    Route::get('/', 'DashboardController@index')->name('backend.dashboard');
    Route::resource('/users', 'UserController');
    Route::post('/users/edit-profile/{id}', 'UserController@editProfile')->name('users.editProfile');
    Route::post('/users/change-password/{id}', 'UserController@changePassword')->name('users.changePassword');
    Route::post('/users/change-status/{id}', 'UserController@changeStatus')->name('users.changeStatus');
    Route::post('/users/restore/{id}', 'UserController@restore')->name('users.restore');
    Route::delete('/users/force-delete/{id}', 'UserController@forceDestroy')->name('users.forceDestroy');
    Route::post('/users/delete-image/{id}', 'UserController@destroyImage')->name('users.destroyImage');

    Route::get('/contact-us/edit', 'ContactUsController@edit')->name('contact-us.edit');
    Route::post('/contact-us/update', 'ContactUsController@update')->name('contact-us.update');

    Route::resource('roles', 'RoleController');

    Route::get('mark-as-read', 'ViewerMessageController@markAsRead')->name('viewer-messages.markAsRead');

    Route::resource('/categories', 'CategoryController');
    Route::post('/categories/change-status/{id}', 'CategoryController@changeStatus')->name('categories.changeStatus');
    Route::post('/categories/restore/{id}', 'CategoryController@restore')->name('categories.restore');
    Route::delete('/categories/force-delete/{id}', 'CategoryController@forceDestroy')->name('categories.forceDestroy');

    Route::resource('/sub-categories', 'SubCategoryController');
    Route::post('/sub-categories/change-home-visibility/{id}', 'SubCategoryController@changeHomeVisibility')->name('sub-categories.changeHomeVisibility');
    Route::post('/sub-categories/change-status/{id}', 'SubCategoryController@changeStatus')->name('sub-categories.changeStatus');
    Route::post('/sub-categories/restore/{id}', 'SubCategoryController@restore')->name('sub-categories.restore');
    Route::delete('/sub-categories/force-delete/{id}', 'SubCategoryController@forceDestroy')->name('sub-categories.forceDestroy');

    Route::resource('/products', 'ProductController')->except('show', 'create');
    Route::get('/products/categories', 'ProductController@addCategories')->name('products.addCategories');
    Route::get('/products/get-sub-categories/{categoryId}', 'ProductController@getSubCategories')->name('products.getSubCategories');
    Route::post('/products/categories/add', 'ProductController@redirectProductForm')->name('products.redirectProductForm');
    Route::get('/products/{subCategorySlug}/create', 'ProductController@create')->name('products.create');
    Route::get('/products/{productSlug}/images', 'ProductController@addImages')->name('products.addImages');
    Route::post('/products/{productId}/images/add', 'ProductController@saveImages')->name('products.saveImages');
    Route::post('/products/{productId}/images/destory/{imageId}', 'ProductController@destoryImages')->name('products.destroyImages');
    Route::post('/products/change-status/{id}', 'ProductController@changeStatus')->name('products.changeStatus');
    Route::patch('/products/mark-sold/{id}', 'ProductController@markSold')->name('products.markSold');
    Route::patch('/products/mark-featured/{id}', 'ProductController@markFeatured')->name('products.markFeatured');
    Route::patch('/products/renew/{id}', 'ProductController@renew')->name('products.renew');
    Route::post('/products/restore/{id}', 'ProductController@restore')->name('products.restore');
    Route::delete('/products/force-delete/{id}', 'ProductController@forceDestroy')->name('products.forceDestroy');

    Route::resource('/faqs', 'FaqController');
    Route::resource('/cities', 'CityController');
    Route::resource('/countries', 'CountryController');
    Route::post('/faqs/change-status/{id}', 'FaqController@changeStatus')->name('faqs.changeStatus');
    Route::post('/faqs/restore/{id}', 'FaqController@restore')->name('faqs.restore');
    Route::delete('/faqs/force-delete/{id}', 'FaqController@forceDestroy')->name('faqs.forceDestroy');

    Route::resource('/buyer-questions', 'BuyerQuestionController');
    Route::get('/buyer-questions/{buyer_question}/reply', 'BuyerQuestionController@reply')->name('buyer-questions.reply');
    Route::patch('/buyer-questions/{buyer_question}/send-reply', 'BuyerQuestionController@sendReply')->name('buyer-questions.sendReply');
});

Auth::routes();
Route::get('/confirm-email', 'Auth\EmailConfirmController@pending')->name('email.confirm');
Route::get('/email-verify/{token}', 'Auth\EmailConfirmController@verify');
Route::post('/reverify', 'Auth\EmailConfirmController@resendVerificationToken')->name('email.reverify');

Route::group([
    'namespace' => 'Frontend',
], function(){
    Route::get('/', 'HomeController@index')->name('frontend.home');
    Route::get('/product/{productViewType}', 'ProductController@index')->name('product.index');
    Route::get('/view-product/{product}', 'ProductController@show')->name('product.show');
    Route::get('/filter/product', 'ProductController@filter')->name('product.filter');
    Route::get('/search/product', 'ProductController@search')->name('product.search');
    Route::get('/contact-us', 'ContactUsController@index')->name('contact-us.index');
    Route::post('/contact-us/send', 'ContactUsController@send')->name('contact-us.send');
    Route::get('/faq', 'FaqController@index')->name('frontend.faq');
    Route::get('/term-condition', 'TermConditionController@index')->name('frontend.term-condition');
    Route::get('/privacy-policy', 'PrivacyPolicyController@index')->name('frontend.privacy-policy');
    Route::get('/rules-tips', 'RuleTipController@index')->name('frontend.rule-tip');

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/product-section/categories', 'ProductSectionController@addCategories')->name('product-section.addCategories');
        Route::get('/product-section/get-sub-categories/{categoryId}', 'ProductSectionController@getSubCategories')->name('product-section.getSubCategories');
        Route::post('/product-section/categories/add', 'ProductSectionController@redirectProductForm')->name('product-section.redirectProductForm');
        Route::get('/product-section/{subCategorySlug}/create', 'ProductSectionController@create')->name('product-section.create');
        Route::post('/product-section/store', 'ProductSectionController@store')->name('product-section.store');
        Route::get('/product-section/{productSlug}/images', 'ProductSectionController@addImages')->name('product-section.addImages');
        Route::post('/product-section/{productId}/images/add', 'ProductSectionController@saveImages')->name('product-section.saveImages');
        Route::post('/product-section/{productId}/images/destory/{imageId}', 'ProductSectionController@destoryImages')->name('product-section.destroyImages');
        Route::get('/buyer-question/{productSlug}/read-more', 'BuyerQuestionController@readMore')->name('buyer-question.readMore');
        Route::post('/buyer-question/store', 'BuyerQuestionController@store')->name('buyer-question.store');

        Route::group([
            'prefix' => 'my-account/dashboard', 'namespace' => 'UserAccount'
        ], function () {
            Route::get('/', 'AccountController@index')->name('my-account.index');
            Route::get('/profile', 'AccountController@showProfile')->name('my-account.showProfile');
            Route::patch('/profile/update', 'AccountController@updateProfile')->name('my-account.updateProfile');
            Route::post('/profile/delete-image/{id}', 'AccountController@destroyImage')->name('my-account.destroyImage');
            Route::get('/change-password', 'AccountController@changePassword')->name('my-account.changePassword');
            Route::patch('/update-password', 'AccountController@updatePassword')->name('my-account.updatePassword');
            
            Route::resource('/product-section', 'ProductSectionController')->except('create', 'store', 'show');
            Route::patch('/product-section/mark-sold/{product}', 'ProductSectionController@markSold')->name('product-section.markSold');
            Route::patch('/product-section/renew/{id}', 'ProductSectionController@renew')->name('product-section.renew');

            Route::resource('/buyer-question', 'BuyerQuestionController')->except('create', 'store', 'destroy');
            Route::get('/buyer-question/{buyer_question}/reply', 'BuyerQuestionController@reply')->name('buyer-question.reply');
            Route::patch('/buyer-question/{buyer_question}/send-reply', 'BuyerQuestionController@sendReply')->name('buyer-question.sendReply');

            Route::resource('/your-question', 'YourQuestionController')->except('create', 'store', 'show', 'destroy');
            Route::get('/your-question/{buyer_question}/view-reply', 'YourQuestionController@viewReply')->name('your-question.view-reply');
            
            Route::get('notification', 'NotificationController@viewNotification')->name('notification.view-notification');
            Route::get('mark-read', 'NotificationController@markRead')->name('notification.mark-read');
            Route::delete('notification/delete/{id}', 'NotificationController@destroy')->name('notification.destroy');

        });
    });
});
	