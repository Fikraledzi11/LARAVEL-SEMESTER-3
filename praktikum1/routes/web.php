<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
route::post('/proses',[DataController::class, 'proses']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
        return 'Hallo Ganteng';
});

Route::get('/user/{name}', function($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "hello, $name";
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/about',function(){
    return view('about', ['name'=> 'FIKRAL EDZI ALFITRAH']);
});

Route::get('/home', function(){
    return 'Halo Ini adalah halaman Home';
}) ->name('home.page');


