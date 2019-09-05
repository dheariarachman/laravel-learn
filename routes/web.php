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

Route::get('post', 'PostController@index');

Route::get('biodata', 'BiodataController@index');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/about', 'BlogController@about');
Route::get('/blog/contact', 'BlogController@contact');

// Member Route
Route::get('/member', 'MemberController@index');
Route::get('/member/add', 'MemberController@add');
Route::post('/member', 'MemberController@store');
Route::get('/member/edit/{id}', 'MemberController@edit');
Route::post('/member/update', 'MemberController@update');
Route::delete('member/{id}', 'MemberController@delete');
Route::get('member/find', 'MemberController@find');