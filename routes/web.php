<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/cheeses/index', 'CheesesController@index');
Route::get('/cheeses/cheese/{id}', 'CheesesController@singleCheese');
Route::delete('/cheeses/cheese', 'CheesesController@destroy');
Route::post('/cheeses/index', 'CheesesController@store');
Route::get('/cheeses/create', 'CheesesController@create');
Route::get('/cheeses/{id}/edit', 'CheesesController@edit');
Route::post('/cheeses/{id}/edit', 'CheesesController@update');


Route::get('/cheeses/countries', 'CountriesController@countryList');
Route::get('/cheeses/country/{id}', 'CountriesController@byCountry');

Route::get('/cheeses/colors', 'ColorsController@colorList');
Route::get('/cheeses/color/{id}', 'ColorsController@byColor');

Route::get('/cheeses/types', 'TypesController@typesList');
Route::get('/cheeses/type/{id}', 'TypesController@byType');

Route::get('/cheeses/textures', 'TexturesController@textureList');
Route::get('/cheeses/texture/{id}', 'TexturesController@byTexture');

Route::get('/dishes/index', 'DishesController@index');
Route::get('/dishes/dish/{id}', 'DishesController@singleDish');
Route::delete('/dishes/dish', 'DishesController@destroy');
Route::post('/dishes/index', 'DishesController@store');
Route::get('/dishes/create', 'DishesController@create');
Route::get('/dishes/{id}/edit', 'DishesController@edit');
Route::post('/dishes/{id}/edit', 'DishesController@update');


Route::get('/signup', 'SignUpController@index');
Route::post('signup', 'SignUpController@signup');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/users', 'UsersController@index');
// Route::get('/users', 'UsersController@destroy');