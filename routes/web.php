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
    return view('blog.index');
});

//  Route::get('/post/{id}', function ($id, $name) {
//     return view('blog.post')->name('post.show');
// });

Route::get('/post/{id}', function () {
  return view('blog.post')->name('post');
});
