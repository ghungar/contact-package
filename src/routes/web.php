<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Raman\Contact\controllers'], function () {

    Route::get   ('contact' , 'SampleController@index');
    Route::post  ('contact' , 'SampleController@store');

});

