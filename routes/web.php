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
    return view('home');
});
// Route::get('/Login', function () {
//     return view('login');
// });
// Route::get('/Register', function () {
//     return view('register');
// });

// Auth::routes();
Route::post('/loginUser', 'UserController@login');
Route::post('/registerUser', 'UserController@register');
Route::post('/logoutUser', 'UserController@logout');

Route::get('/login', 'PageController@login');
Route::get('/register', 'PageController@register');

Route::get('/home', 'HomeController@index');
