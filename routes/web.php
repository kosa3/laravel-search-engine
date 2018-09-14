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
});

Route::get('/post/search', function () {
    return App\Models\Post::search(\request('q'))->get();
});

Route::get('/solr', function () {
    return view('solr');
});

Route::get('/solr/ping', 'SolariumController@ping');

Route::get('/solr/search', 'SolariumController@search');
