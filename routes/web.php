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

Route::get('/', 'NavigationController@KnowAbout')->name('know-about');
Route::get('/beneficios-de-la-alternancia', 'NavigationController@BenefitsAlternation')->name('benefits-alternation');
Route::get('/explore-sus-sentimientos', 'NavigationController@ExploreYourFeelings')->name('explore-your-feelings');
Route::get('/evalue-lo-que-sabe', 'NavigationController@EvaluateWhatKnows')->name('evaluate-what-knows');
Route::get('/mensajes-para-recordar', 'NavigationController@MessagesRemember')->name('messages-to-remember');
Route::get('/public', function(){
   return redirect()->route('know-about');
});