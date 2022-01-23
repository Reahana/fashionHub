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

Route::get('/', [
    'uses' => 'App\Http\Controllers\FashionHubController@index',
    'as' => '/'
]);

Route::get('/about-us', [
    'uses' => 'App\Http\Controllers\FashionHubController@about',
    'as' => 'about'
]);

Route::get('/blog', [
    'uses' => 'App\Http\Controllers\FashionHubController@blog',
    'as' => 'blog'
]);


Route::get('/dashboard', [
    'uses' => 'App\Http\Controllers\DashboardController@index',
    'as' => 'dashboard',
    'middleware'=>['auth:sanctum', 'verified']
]);


