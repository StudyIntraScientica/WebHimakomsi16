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

// Rute khusus untuk user
Route::get('/', function () {
    return view("welcome");
});
Route::resource('blog', 'BlogController', ['only' =>[
  'index', 'show'
]]);
Route::resource('gallery', 'GalleryController', ['only' =>[
  'index', 'show'
]]);

// Rute khusus panel admin
Route::group(['prefix' => 'admin'], function () {
  Route::auth();
  Route::get('/home', 'HomeController@index');

  Route::resource('blog', 'BlogController', ['except' =>[
    'index', 'show'
  ]]);
  Route::resource('gallery', 'GalleryController', ['except' =>[
    'index', 'show'
  ]]);
});
