<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Backend Template routes

Route::middleware('role:admin')->group(function () {

  Route::resource('brand', 'BrandController'); 
  Route::resource('category', 'CategoryController');
  Route::resource('subcategory', 'SubcategoryController');
  Route::resource('item', 'ItemController');
  Route::resource('blog', 'BlogController');
  Route::resource('slide', 'SlideController');
  Route::post('review', 'ReviewContorller@store')->name('feedback');
  Route::get('customerreviews', 'ReviewController@index')->name('reviews');
  Route::get('customerreviews/{id}', 'ReviewController@show')->name('reviews.show');
  Route::resource('order', 'OrderController');

  });


  // Frontend with items
 
Route::get('/', 'FrontendController@home')->name('mainpage');
// Route::get('review', 'FrontendController@review')->name('review');

Route::get('reviews', 'ReviewController@reviews')->name('reviews');
Route::post('reviews', 'ReviewController@store')->name('reviews.review');


// Order Process

Route::post('confirm/{id}', 'OrderController@confirm')->name('order.confirm');
Route::get('/brands', 'FrontendController@brands')->name('brandpage');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/blogdetail/{id}', 'FrontendController@blogdetail')->name('blogdetail');
Route::get('itemdetail/{id}', 'FrontendController@itemdetail')->name('itemdetail');
Route::get('itemsbysubcategory/{id}', 'FrontendController@itemsbysubcategory')->name('itemsbysubcategory');
Route::get('itemsbybrand/{id}', 'FrontendController@itemsbybrand')->name('itemsbybrand');
Route::get('/blogs', 'FrontendController@blogs')->name('blogpage');
Route::get('cart', 'FrontendController@cart')->name('cartpage');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Signin Signup

Auth::routes(['register'=>false]); 

Route::get('signin', 'FrontendController@signin')->name('signinpage');
Route::get('signup', 'FrontendController@signup')->name('signuppage');
Route::resource('user', 'UserController');

// Search Bar

// Route::get('/search','FrontendController@search');
Route::get('/search', 'FrontendController@search')->name('search');



