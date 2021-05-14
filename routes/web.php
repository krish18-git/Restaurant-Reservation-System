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
use App\Http\Controllers\BookingController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');
// Route::get('/seller', 'PagesController@sdashboard');
// Route::get('/buyer', 'PagesController@bdashboard');
// Route::get('/help', 'PagesController@help');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/addbooking', 'PagesController@addbooking');
    Route::get('/search_name', 'PagesController@searchname');
    Route::post('/searchnameres', 'PagesController@searchnameres');
    Route::get('/search_date', 'PagesController@searchdate');
    Route::post('/searchdateres', 'PagesController@searchdateres');
    Route::get('/seller/addproperty', 'PagesController@addproperty');
    Route::resource('bookings', 'BookingController');
    Route::get('/get-table','PagesController@getTable');
});

Route::get('/destroypast','PagesController@destroypast');
// Route::resource('properties','AddsController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::any('/search',function(){
//     $q = Input::get ( 'q' );
//     $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
//     if(count($user) > 0){
//         return view('welcome')->withDetails($user)->withQuery ( $q );
//     }
//     else{
//         return view ('welcome')->withMessage('No Details found. Try to search again !');
//     } 
// });

