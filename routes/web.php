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

Route::get('/herbs', function () {
    return view('herb');
});


Auth::routes();

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
//Route for admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', 'admin\AdminController@index')->name('admin');
        Route::get('herb', function () {
            return view('admin/herb');
        })->name('herb');
        Route::get('create', function () {
            return view('admin/create');
        })->name('create');
        Route::get('edit', function () {
            return view('admin/edit');
        })->name('edit');
        Route::get('chat', function () {
            return view('admin/chat');
        })->name('chat');

        //Category
        Route::get('category', 'CategoryController@index')->name('category');
        Route::post('category/create', 'CategoryController@create')->name('create-category');
    });
});















//redirect to home on error
Route::any(
    '{query}',
    function () {
        return redirect('/');
    }
)
    ->where('query', '.*');
