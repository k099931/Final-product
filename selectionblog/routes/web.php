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

Route::group(['middleware' => ['auth']], function(){
    
    Route::post('/rubbers', 'RubberController@store');
    Route::post('/ruckets', 'RucketController@store');
    Route::delete('/rubbers/{rubber}', 'RubberController@delete');
    Route::delete('/ruckets/{rucket}', 'RucketController@delete');
    
});

Route::get('/login/google' , 'Auth\LoginController@redirectToGoogle');
Route::get('/login/google/callback' , 'Auth\LoginController@handleGoogleCallback');
Route::get('/menu', 'MenuController@index');
Route::get('/recommend' , 'RecommendController@index');
Route::get('/select' , 'SelectController@index');
Route::get('/rubbers', 'RubberController@index');
Route::get('/ruckets', 'RucketController@index');
Route::get('/select/result' , 'SelectController@select');
Route::get('/recommend/result' , 'RecommendController@recommend');
Route::post('/recommend/result' , 'RecommendController@recommend');
Route::post('/select/result' , 'SelectController@select');
Route::get('/rubbers/search', 'RubberController@search');
Route::get('/ruckets/search', 'RucketController@search');
Route::post('/rubbers/search', 'RubberController@search');
Route::post('/ruckets/search', 'RucketController@search');
Route::get('/rubbers/{rubber}', 'RubberController@show');
Route::get('/ruckets/{rucket}', 'RucketController@show');
    
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

?>
