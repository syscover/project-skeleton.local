<?php

Route::group(['middleware' => ['pulsar.navtools']], function() {

    Route::get('/',                 '\App\Http\Controllers\WebFrontendController@home')->name('web.home');

    // EN
    Route::get('/en',               '\App\Http\Controllers\WebFrontendController@home')->name('web.home-en');
    Route::get('/en/menu-01',       '\App\Http\Controllers\WebFrontendController@menu01')->name('web.menu_01-en');
    Route::get('/en/shadows',       '\App\Http\Controllers\WebFrontendController@shadows')->name('web.shadows-en');

    // ES
    Route::get('/es',               '\App\Http\Controllers\WebFrontendController@home')->name('web.home-es');
    Route::get('/es/menu-01',       '\App\Http\Controllers\WebFrontendController@menu01')->name('web.menu_01-es');
    Route::get('/es/sombras',       '\App\Http\Controllers\WebFrontendController@shadows')->name('web.shadows-es');
});
