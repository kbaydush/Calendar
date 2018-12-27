<?php

declare(strict_types = 1);

Route::get('/{any}', 'SpaController@index')->where('any', '.*');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
