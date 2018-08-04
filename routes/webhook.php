<?php

Route::group(['prefix'=>'v1/alert', 'namespace'=>'Webhook\V1\Alert'], function ($route){
    $route->get('/', 'MainController@index');
    $route->post('/recive', 'ReciveController@index');
});