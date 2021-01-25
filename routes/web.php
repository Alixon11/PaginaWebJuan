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



Route::get('/', 'Controller@index');

Route::any('/login', 'Controller@auth');

Route::any('/register', 'Controller@register');

Route::any('/forgotpassword','passwordController@forgotpassword');

Route::get('/forgotpassword/{token}','passwordController@getpassword');

Route::any('/changepassword','passwordController@newpassword');

Route::any('/admin','passwordController@payadmin');

// Route::get('/register', function(){
//     return view('register');
// });
