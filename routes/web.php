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

    Route::get('/', ['as' => 'index', 'uses' => 'HomeCTRL@index']);
    Route::get('/bread', function(){
        return phpinfo();
    });

    Route::get('/kurumsal', ['as' => 'kurumsal', 'uses' => 'HomeCTRL@kurumsal_index']);
    Route::get('/kurumsal/{slug}', ['as' => 'kurumsal_slug', 'uses' => 'HomeCTRL@kurumsal_detail']);


    Route::get('/hizmetler', ['as' => 'hizmetler', 'uses' => 'HomeCTRL@hizmetler']);
    Route::get('/calismalar', ['as' => 'calismalar', 'uses' => 'HomeCTRL@calismalar']);
    Route::get('/iletisim', ['as' => 'iletisim', 'uses' => 'HomeCTRL@iletisim']);
    Route::post('/iletisim', ['as' => 'iletisim_post', 'uses' => 'HomeCTRL@iletisim_post']);


    Route::group(['prefix' => 'yonetim'], function () {
        Voyager::routes();
    });
