<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'api/' . config('youtube-api.route_prefix', 'ytconverter'),
    'namespace' => 'MichaelBelgium\YoutubeAPI\Controllers',
    'middleware' => 'api'
], function() {
    Route::post('/convert', 'ApiController@convert');
    Route::delete('/{id}', 'ApiController@delete');
    Route::get('/search/{q}', 'ApiController@search');
});
