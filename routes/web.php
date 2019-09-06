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

Route::get('/', function () {
    return view('frontend/index');
});
Route::get('my_account', 'UserController@myAccount')->name('my_account');
Route::get('customer_login', 'Auth\LoginController@showAdminLoginForm')->name('customer_login');
Route::get('customer_register', 'UserController@register')->name('customer_register');
Route::get('product', 'UserController@products')->name('product');
Route::get('product_detail', 'UserController@productDetail')->name('product_detail');
Route::get('index_fixed_header', 'UserController@fixedHeader')->name('index_fixed_header');
Route::get('index_inverse_header', 'UserController@inverseHeader')->name('index_inverse_header');
Route::get('search_result', 'UserController@searchResult')->name('search_result');
Route::get('checkout_cart', 'UserController@checkoutCart')->name('checkout_cart');
Route::get('checkout_info', 'UserController@checkoutInfo')->name('checkout_info');
Route::get('checkout_payment', 'UserController@checkoutPayment')->name('checkout_payment');
Route::get('checkout_complete', 'UserController@checkoutComplete')->name('checkout_complete');
Route::get('contact_us', 'UserController@contactUs')->name('contact_us');
Route::get('about_us', 'UserController@aboutAs')->name('about_us');
Route::get('faq', 'UserController@faq')->name('faq');
//Admin
Route::prefix('admin')->group(function () {
    Route::get('/','Auth\LoginController@showAdminLoginForm')->name('admin');
});
Route::prefix('register')->group(function () {
   Route::get('/','Auth\RegisterController@showRegistrationForm')->name('register');
});
Auth::routes();
Route::post('register_user', 'Auth\RegisterController@create')->name('register_user');
Route::get('dashboard','AdminController@dashboard')->name('dashboard');
Route::get('profile','AdminController@profileView')->name('profile');
Route::post('profile_update','AdminController@profileUpdate')->name('profile_update');

/*Categories Routes*/
Route::prefix('categories')->group(function () {
    Route::get('manage','CategoryController@manage')->name('category_manage');
    Route::get('category_listing','CategoryController@listing')->name('category_listing');
    Route::get('create_category','CategoryController@createView')->name('create_category');
    Route::post('category_create','CategoryController@create')->name('category_create');
    Route::get('edit-categories/{id}','CategoryController@editView')->name('edit-categories');
    Route::post('category_edit','CategoryController@edit')->name('category_edit');
});

/*Products Route*/
Route::prefix('product')->group(function () {
    Route::get('manage','ProductController@manage')->name('product_manage');
    Route::get('product_listing','ProductController@listing')->name('product_listing');
    Route::get('create_product','ProductController@createView')->name('create_product');
    Route::post('product_create','ProductController@create')->name('product_create');
    Route::get('edit-product/{id}','ProductController@editView')->name('edit-product');
    Route::post('product_edit','ProductController@edit')->name('product_edit');
});
