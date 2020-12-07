<?php

use Illuminate\Support\Facades\Route;
use\App\Address;

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



Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/about', function(){
    return view('about');
});


Route::get('/services', function(){
    return view('services');
});

Route::get('/exchange', function(){
    return view('exchange');
});

Route::resource('/contact', 'contactController');

//Route::get('/api_data', 'API\ApiController@index');
Route::get('/exchange', 'API\ApiController@getApiData');

Route::get('/response', function(){
    return view('response');
});

Route::get('/admin', function(){
    return view('admin.admin_index');
});

/*
|--------------------------------------------------------------------------
| Home Page Routes Are Start From Here.
|--------------------------------------------------------------------------
*/

Route::get('/', 'SiteindexController@index');

/*------------------------------End Here----------------------------------*/

/*
|--------------------------------------------------------------------------
| Address Routes Are Start From Here.
|--------------------------------------------------------------------------
*/

Route::get('/add-address', 'Admin\AddressController@create');
Route::post('/address', 'Admin\AddressController@store');
Route::post('/address/{id}', 'Admin\AddressController@update');

/*------------------------------End Here----------------------------------*/

/*
|--------------------------------------------------------------------------
| News Routes Are Start From Here.
|--------------------------------------------------------------------------
*/

Route::get('/news','Admin\NewsController@index');
Route::get('/news/create','Admin\NewsController@create');
Route::post('/news','Admin\NewsController@store');
Route::get('/news/{id}','Admin\NewsController@show');

/*------------------------------End Here----------------------------------*/

/*
|--------------------------------------------------------------------------
| Header And Footer Routes Are Start From Here.
|--------------------------------------------------------------------------
*/

view()->composer(['common.header'], function($view){
    $address = Address::all()->last();
    $view->with('address', $address);
});

view()->composer(['common.footer'], function($view){
    $address = Address::all()->last();
    $view->with('address', $address);
});

/*------------------------------End Here----------------------------------*/

Route::get('/rates', function(){
    return view('admin.add_rates_detail');
});
