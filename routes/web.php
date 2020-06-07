<?php

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/{any}', function (){
    return redirect()->route('login');
});
