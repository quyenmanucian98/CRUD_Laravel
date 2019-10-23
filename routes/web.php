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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show',"LoginController@show");
Route::post('/login','LoginController@login')->name('login.check');

Route::prefix('players')->group(function () {
    Route::get('/list', 'PlayerController@listPlayers')->name('players.list');
    Route::get('/formAdd', 'PlayerController@formAdd')->name('players.formAdd');
    Route::post('/addPlayer', 'PlayerController@addPlayer')->name('players.addPlayer');
    Route::get('/deletePlayer/{id}', 'PlayerController@deletePlayer')->name('players.delete');
    Route::get('/editPlayer/{id}', 'PlayerController@editPlayer')->name('players.edit');
    Route::post('/editPlayer/{id}', 'PlayerController@updatePlayer')->name('players.edit');
});
