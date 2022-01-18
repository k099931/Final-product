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


Route::get('/', 'MenuController@index');
Route::get('/rubbers', 'RubberController@index');
Route::get('/ruckets', 'RucketController@index');
Route::post('/rubbers', 'RubberController@store');
Route::post('/ruckets', 'RucketController@store');
Route::get('/rubbers/search', 'RubberController@search');
Route::get('/ruckets/search', 'RucketController@search');
Route::post('/rubbers/search', 'RubberController@search');
Route::post('/ruckets/search', 'RucketController@search');
Route::get('/rubbers/{rubber}', 'RubberController@show');
Route::get('/ruckets/{rucket}', 'RucketController@show');
Route::delete('/rubbers/{rubber}', 'RubberController@delete');
Route::delete('/ruckets/{rucket}', 'RucketController@delete');
    
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

?>
