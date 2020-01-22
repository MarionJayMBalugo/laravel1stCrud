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
    Route::get('/',"Controller@login")->name('login');
    Route::get('/home',"Controller@view")->name('home');
    Route::get('/addInfo',function(){
        return view('addInformation');
    })->name('addInfo');
    Route::get('/insert',"Controller@insertInfo")->name('insertInfo');
    Route::get('/deleteInfo/{id}',"Controller@deleteInfo")->name('deleteInfo');
    Route::get('/updateInfo/{id}',"Controller@updateInfo")->name('updateInfo');
    Route::get('/goHome',"Controller@goHome")->name('goHome');
    //lahi na ni sya
    // Route::get('/index',"Controller@index")->name('human.index');
    // Route::get('/create',"Controller@index")->name('human.create');
    // Route::get('/store',"Controller@index")->name('human.store');
    // Route::get('/index',"Controller@index")->name('human.index');
    // Route::get('/create',"Controller@index")->name('human.create');
    // Route::get('/store',"Controller@index")->name('human.store');