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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/Login', function () {
//     return view('login');
// });
// Route::get('/Register', function () {
//     return view('register');
// });

// Auth::routes();
//APIs
Route::post('/loginUser', 'UserController@login');
Route::post('/registerUser', 'UserController@register');
Route::post('/logoutUser', 'UserController@logout');
Route::post('/insertShoe', 'ShoeController@insertShoe');


//Page

//If authenticated, go to home right away
Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', 'PageController@login');
    Route::get('/register', 'PageController@register');
});

//If not authenticated, then go back to login
Route::group(['middleware' => ['authenticate']], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/insertShoe', 'PageController@insertShoe');
    Route::get('/shoeDetail/{id}', 'ShoeController@shoeDetail');
    Route::get('/shoeDelete/{id}', 'ShoeController@delete');
});
