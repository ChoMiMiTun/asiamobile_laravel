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

  Route::resource('brand', 'BrandController'); 
  Route::resource('category', 'CategoryController');
  Route::resource('subcategory', 'SubcategoryController');
  Route::resource('item', 'ItemController');
  Route::resource('blog', 'BlogController');
  Route::resource('slide', 'SlideController');

  // Frontend with items
  
Route::get('/', 'FrontendController@home')->name('mainpage');
// Route::get('/', 'FrontendController@allcat')->name('frontendtemplate');
Route::get('/review', 'FrontendController@review')->name('review');
Route::get('/brands', 'FrontendController@brands')->name('brandpage');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/blogdetail/{id}', 'FrontendController@blogdetail')->name('blogdetail');
Route::get('itemdetail/{id}', 'FrontendController@itemdetail')->name('itemdetail');

Route::get('cart', 'FrontendController@cart')->name('cartpage');