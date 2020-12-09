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
// Route::get('about',function(){
// 	return view('about');
// });
// Route::get('/','MainController@home')->name('home');
// Route::get('/home','MainController@home')->name('home');
// Route::get('about','MainController@about')->name('about');

Route::get('/','FrontendController@home')->name('home');
Route::get('/home','FrontendController@home')->name('home');
Route::get('/about','FrontendController@about')->name('about');
Route::get('/postdetail','FrontendController@postdetail')->name('postdetail');
Route::get('/contact','FrontendController@contact')->name('contact');

Route::get('/dashboard','BackendController@dashboard')->name('dashboard');

//crud

Route::resource('brands','BrandController'); 
Route::resource('/categories','CategoryController');
Route::resource('/subcategories','SubcategoryController'); 
Route::resource('items','ItemController'); 

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
