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
use Illuminate\Support\Facades\Response;
use App\User;

Route::get('/', function () {
    return view('welcome');
})->name('root');



Route::post('users',function (){
    if(Request::ajax()){
        return Response()::json(request::all());
    }
});

Route::get('redirectToProvider','UserController@redirectToProvider')->name('redirectToProvider');
Route::get('handleProviderCallback','UserController@handleProviderCallback')->name('handleProviderCallback');
Route::get('redirect','UserController@redirect')->name('redirect');
Route::get('callback','UserController@callback')->name('callback');
Route::post('logout','UserController@logout')->name('logout');
Route::get('home','UserController@home')->name('home');
Route::get('login','UserController@login')->name('login');
Route::post('signin','UserController@signin')->name('signin');
Route::get('profile','UserController@profile')->name('profile');

Route::get('public/xml/user.xml', function() {
    $users = User::all();

    $xml = new XMLWriter();
    $xml->openMemory();
    $xml->startDocument();
    $xml->startElement('users');
    foreach($users as $user) {
        $xml->startElement('data');
        $xml->writeAttribute('email', $user->email);
        $xml->writeAttribute('phone', $user->phone);
        $xml->writeAttribute('name', $user->name);
        $xml->writeAttribute('address', $user->address);
        $xml->endElement();
    }
    $xml->endElement();
    $xml->endDocument();

    $content = $xml->outputMemory();
    $xml = null;

    return response($content)->header('Content-Type', 'text/xml');
});



Route::get('searchName','UserController@searchName')->name('searchName');
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



Route::post('blogs',function (){
    if(Request::ajax()){
        return Response::json(Request::all());
    }
});
Route::get('/blog/read-data','BlogController@getBlog');
Route::get('singleBlog','BlogController@singleBlog')->name('singleBlog');
Route::post('deleteAll','BlogController@deleteAll')->name('deleteAll');
Route::get('getBlog','BlogController@getBlog')->name('getBlog');
Route::resource('blogs','BlogController');
Route::resource('products','ProductController');



