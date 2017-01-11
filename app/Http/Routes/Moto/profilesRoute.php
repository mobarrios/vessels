<?php

Route::group(['prefix'=>'profile'],function(){

        $section =  'profiles';

        Route::get('',       ['as'=>'moto.'.$section.'.index','uses'=>'Moto\ProfileController@index']);
        Route::post('/{id}',    ['as'=>'moto.'.$section.'.update','uses'=>'Moto\ProfileController@update']);


});
