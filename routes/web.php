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
    return view('welcome');
})->name('root');

Route::post('users',function (){
    if(Request::ajax()){
        return Response()::json(request::all());
    }
});
Route::post('logout','UserController@logout')->name('logout');
Route::get('home','UserController@home')->name('home');
Route::get('login','UserController@login')->name('login');
Route::post('signin','UserController@signin')->name('signin');
Route::get('profile','UserController@profile')->name('profile');
Route::resource('users','UserController');
Route::get('dashboard', function () {
    return redirect('/dashboard');
});



Route::post('index1','BlogController@index1')->name('index1');
//Route::get('index1','BlogController@index1')->name('index1');
Route::get('index1',function (){
    if(Request::ajax()){
        return 'loaded';
    }
});
Route::resource('blogs','BlogController');

Route::resource('products','ProductController');



