<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('fiis', 'FiisController');
Route::resource('cotas', 'CotasController');
Route::resource('dividendos', 'DividendosController');
Route::get('recebiveis', 'RendimentosController@recebiveis');
Route::resource('rendimentos', 'RendimentosController');
