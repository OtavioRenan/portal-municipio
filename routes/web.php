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
    return view('index');
});

Route::group(['prefix'=> '/'], function(){

    Route::get('diariooficial', function(){
        return view('/transparencia.diariooficial');
    });

    Route::get('receita', function(){
        return view('/transparencia.receita');
    });

    Route::get('despesa', function(){
        return view('/transparencia.despesa');
    });

    Route::get('diaria', function(){
        return view('/transparencia.diaria');
    });

    Route::get('folhadepagamento', function(){
        return view('/transparencia.folhadepagamento');
    });
    
});