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
    return view('samt.index');
});

Route::view('/about-us', 'samt.about-us');

Route::view('/about-us', 'samt.about-us');
Route::view('/index', 'samt.index');
Route::view('/gridmargin-5-column', 'samt.gridmargin-5-column');
Route::view('/gridmargin-circle-shape', 'samt.gridmargin-circle-shape')->with($videos => 12);
Route::view('/classic-blog', 'samt.classic-blog');
Route::view('/minimalistic-blog-2', 'samt.minimalistic-blog-2');
Route::view('/contact', 'samt.contact');

