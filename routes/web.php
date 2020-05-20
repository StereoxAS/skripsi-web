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
})->name('home');
Route::get('/search', function () {
    return view('search');
});
Route::get('/browse', function () {
    return view('browse');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/about', function () {
    return view('about');
});
Route::resource('web', 'WebController');

// file upload route
//Route::resource('upload', 'FileController');
Route::get('/upload','FileController@index');
//renaming /upload/fileupload -> uploadFile for convenience and passing request to controller to handle
Route::post('/upload/file','FileController@fileUpload')->name('uploadFile');


//Broken, not deleting just in case error pop out
Route::get('/upload2', function () {
    return view('upload');
});