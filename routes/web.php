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
    return view('home');
});
Route::get('/Payment', function () {
    return view('payment');
});
Route::get('/Contact', function () {
    return view('contact');
});
Route::get('/Game-Rules/PUBG', function () {
    return view('pubg');
});
Route::get('/Game-Rules/NFS', function () {
    return view('nfs');
});
Route::get('/Game-Rules/FIFA', function () {
    return view('fifa');
});
Route::get('/Contest-Rules/Programming', function () {
    return view('programming');
});
Route::get('/Contest-Rules/Hackathon', function () {
    return view('hackathon');
});

Route::get('/Contest-Rules/Online-Tresure-Hunt', function () {
    return view('oth');
});
Route::get('/Contest-Rules/ICT-Quiz', function () {
    return view('ict');
});
Route::get('/Game-Rules/DX-Ball', function () {
    return view('dx');
});