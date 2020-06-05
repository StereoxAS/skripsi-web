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

// basic route on site.com/, do not remove or rename
/*  Usable routes:
    Route::get($uri, $callback);
    Route::post($uri, $callback);
    Route::put($uri, $callback);
    Route::patch($uri, $callback);
    Route::delete($uri, $callback);
    Route::options($uri, $callback);

    Route::view('URI', 'viewName');
    Route::redirect('URI', 'URI', 301);
*/
Route::get('/', function () {
    return view('welcome', ['devName'=>'Krishna Aji']);
})->name('landing');

Route::get('/search', function () {
    return view('search');
})->name('search');;
Route::get('/browse', 'WebController@index')->name('browse');
Route::get('/help', function () {
    return view('help');
});
Route::get('/about', function () {
    return view('about');
});

// file upload route
Route::get('/upload','FileController@index');
//Route::get('/download', 'FileController@show');
//renaming /upload/fileupload -> uploadFile for convenience and passing request to controller to handle
Route::post('/upload/file','FileController@fileUpload')->name('uploadFile');
Route::post('/browse', 'FileController@fetch')->name('fetch');

// post CRUD routes
Route::resource('page', 'WebController');
Route::resource('download', 'FileController');
Route::get('/create', 'WebController@create');

//Broken, not deleting just in case error pop out
/*

Route::resource('upload', 'FileController');
Route::resource('web', 'WebController');
Route::get('/upload2', function () {
    return view('upload');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
