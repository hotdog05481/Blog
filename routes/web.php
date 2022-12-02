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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'App\Http\Controllers\SiteController@Hello');

Route::prefix('/users')->group(function () {
    Route::get('{id?}', 'App\Http\Controllers\UserController@show');
    Route::get('/', 'App\Http\Controllers\UserController@show2');
});

// Route::get('/users/{id}','App\Http\Controllers\UserController@show');

Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
    return "posts $post , comments $comment";
});

Route::namespace ('App\Http\Controllers')->group(function () {
    Route::get('admin', 'SiteController@dashboard');
    Route::get('demo', 'SiteController@demo');

});

Route::get('photo', 'App\Http\Controllers\SiteController@pics');

// Route::resource('posts', 'App\Http\Controllers\PostController');

Route::get('plant', function () {
    return view('plant');
})->name('mypaint');

Route::get('/url', function () {
    return url('plant');
    // return route('mypaint');
    // return action([SiteController::class, 'demo']);
    // return url()->full();
});

Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('articles', 'App\Http\Controllers\ArticleController');

/*Route::get('/url', function () {
return url()->current();
;*/

//字串轉陣列
Route::get('/toarray', function () {
    $str = '1,2,3';
    $ary = explode(',', $str);
    dd($ary);
});

//陣列轉字串
Route::get('/tostring', function () {
    $ary = [1, 2, 3];
    $str = implode(',', $ary);
    dd($str);
});

Route::get('/config', function () {
    dd(config('database.default'));
});