<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhello/{name}','HomeController@sayHello');

Route::get('/uppercase/{word}','HomeController@uppercase');

Route::get('/increment/{number}','HomeController@increment');

Route::get('/rolldice/{guess}',function($guess){
    $number = mt_rand(1,6);
    $data['number'] = $number;
    $data['guess'] = $guess;

    return view('roll-dice',$data);
});
