<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PortfolioController@index')->name('index');
Route::get('/wp/verify','PortfolioController@verifyData')->name('verifyData');
Route::post('/wp/verify/check','PortfolioController@verifyDataCheck')->name('verifyDataCheck');
Route::get('/wp/', 'PortfolioController@showAllData')->name('allData');
Route::get('/wp/edit/{id}', 'PortfolioController@edit')->name('edit');
Route::post('/wp/edit/{id}/save', 'PortfolioController@update')->name('editSave');
Route::get('/wp/delete/{id}', 'PortfolioController@destroy')->name('delete');
Route::get('/wp/add', 'PortfolioController@create')->name('add');
Route::post('/wp/add/save/', 'PortfolioController@store')->name('wpupload');

