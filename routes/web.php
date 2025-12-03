<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::view('simpleRoute','simple');
Route::view('named','named')->name('namedRoute');
Route::prefix('admin')->group(function(){
    Route::view('groupsRoute','group')->name('groups');
});
