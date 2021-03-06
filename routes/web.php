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

Route::get('test', function () {
	return config('story');
});
Route::get('/', 'WebController@landing');
Route::get('/faq', 'WebController@faq');
Route::group(['middleware' => ['cors', 'signature']], function () {
	Route::get('/categories', 'WebController@categories');
	Route::get('/horoscope', 'WebController@horoscope');
	Route::get('/horoscope/{type}', 'WebController@horoscopeType');
	Route::get('/myprofile', 'WebController@profile');
	Route::get('/songforkid', 'WebController@songforkid');
	Route::get('/profile', 'WebController@profile');
	Route::post('profile', 'WebController@postProfile');
	Route::get('funny-games', 'WebController@games');
	Route::get('braintester', 'WebController@braintester');
	Route::get('/health', 'WebController@health');
	Route::get('/health/{id}/detail', 'WebController@healthDetail');
	Route::get('/storyforkid', 'WebController@storyforkid');
	Route::get('/story/{id}/detail', 'WebController@storyforkidDetial');
	Route::get('/educationvideo', 'WebController@educationvideo');
	Route::get('/education/{id}/detail', 'WebController@educationvideoDetail');
	Route::get('post/{id}/{type}/favourite', 'WebController@postFavourite');
	Route::get('unsubscribe', 'WebController@unsubscribe');
});

