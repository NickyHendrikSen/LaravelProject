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
Route::get('/logoutUser', 'UserController@logout');
Route::get('/shoe/{id}', 'ShoeController@detail');


//Page

//If authenticated, go to home right away
Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', 'PageController@login');
    Route::get('/register', 'PageController@register');
});

Route::get('/home', 'HomeController@index');
Route::get('/shoe/{id}', 'ShoeController@detail');

//If not authenticated, then go back to login
Route::group(['middleware' => ['authenticate']], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/cart', 'CartController@show');
    Route::get('/history', 'TransactionController@history');
    Route::get('/shoe/cart/{id}', 'ShoeController@cart');
    Route::get('/shoeDelete/{id}', 'ShoeController@delete');
    Route::get('/cart/update/{id}', 'CartController@update');

    //API
    Route::get('/cart/delete/{id}', 'CartController@delete');
    Route::post('/shoe/cart', 'CartController@addCart');
    Route::post('/cart/update', 'CartController@updateCart');
    Route::post('/checkout', 'TransactionController@checkout');
});
Route::group(['middleware' => ['authadmin']], function() {
    Route::get('/addshoe', 'ShoeController@add');
    Route::get('/alltransaction', 'TransactionController@all');
    Route::get('/shoe/update/{id}', 'ShoeController@updateform');

    //API
    Route::post('/addShoe', 'ShoeController@insertShoe');
    Route::post('/shoe/update', 'ShoeController@update');
});
