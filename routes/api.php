<?php

declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

Route::get('errors/{idModule}', 'Api\ErrorController@list');

Route::post('logo/upload', 'Api\LogoController@upload');

Route::get('modules', 'Api\ModuleController@list');
Route::get('module/{id}', 'Api\ModuleController@get');
Route::put('module/{id}', 'Api\ModuleController@edit');

Route::get('setting/{name}', 'Api\SettingController@get');
Route::put('setting/{name}', 'Api\SettingController@edit');
Route::get('posts', 'Api\PostController@list');
Route::get('calendar', 'Api\CalendarController@list');
Route::get('calendar/{id}', 'Api\CalendarController@get');
Route::any('/{any}', static function () {
    return \response('', Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND);
})->where('any', '.*');
