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

// Auth routes
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// General routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');

// Blog routes
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', 'PostController@index')->name('index');

    // Post routes
    Route::prefix('post')->name('post.')->group(function () {
        Route::get('create', 'PostController@create')->name('create')->middleware('auth');;
        Route::get('{post}', 'PostController@show')->name('show');
        Route::post('add', 'PostController@store')->name('add')->middleware('auth');;
    });
});

// Docs routes
Route::prefix('docs')->name('docs.')->group(function () {
    Route::get('/', 'PostController@index')->name('index');
});

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});