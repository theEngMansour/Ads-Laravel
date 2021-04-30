<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\helper;

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
Route::get('/test', function () {
    return helper::slug('موقع أعلانات مبوبة');
});
Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Cpanel Routes
|--------------------------------------------------------------------------
*/
$url = '/cpanel';
Route::get('/setting','CpanelController@index')->name('cpanel');
Route::get($url.'/posts', 'CpanelController@posts')->name('cpanel-posts');
Route::get($url.'/categories','CpanelController@categories')->name('cpanel-categories');
Route::get($url.'/comments','CpanelController@comments')->name('cpanel-comments');
Route::get($url.'/messages', 'CpanelController@messages')->name('cpanel-messages');
Route::get($url.'/profile', 'CpanelController@profile')->name('cpanel-profile');

/*
|----------------------------------------------------------------
| Auth Route
|----------------------------------------------------------------
*/
Auth::routes();

/*
|----------------------------------------------------------------
| Ads Route
|----------------------------------------------------------------
*/
Route::get('/ho', 'HomeController@index')->name('home');
Route::resource('ads', 'AdsController');
Route::get('userAds', 'AdsController@getUserAds');
Route::get('{id}/{slug}', 'AdsController@getByCategory');
Route::get('ad/{id}/{slug}','AdsController@show');
Route::post('search','AdsController@search')->name('search.froms');
Route::post('ads/{id}/favorite','FavoriteController@store')->name('ads.favorite');

/*
|----------------------------------------------------------------
| Comments Routes
|----------------------------------------------------------------
*/
Route::post('comments/store','CommentController@store')->name('comments.store');
Route::post('comment/reply','CommentController@reply');

/*
|----------------------------------------------------------------
| 404 Page
|----------------------------------------------------------------
*/
Route::fallback(function(){
    return view('errors.404');
});


