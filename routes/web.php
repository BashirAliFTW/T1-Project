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
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/articles', function () {
    return view('articles');
})->middleware('auth');


Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index'])->name('article');
Route::resource('Article', 'App\Http\Controllers\ArticleController');
Route::get('article/{id}', ['as' => 'article.select', 'uses' => 'App\Http\Controllers\ArticleController@select']);
Route::view('form', 'userview');
Route::view('sumbit', 'articles');
