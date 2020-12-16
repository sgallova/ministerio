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

Route::get('/', 'NavegationController@KnowAbout')->name('know-about');
Route::get('/beneficios-de-la-alternancia', 'NavegationController@BenefitsAlternation')->name('benefits-alternation');
Route::get('/explore-sus-sentimientos', 'NavegationController@ExploreYourFeelings')->name('explore-your-feelings');
Route::get('/evalue-lo-que-sabe', 'NavegationController@EvaluateWhatKnows')->name('evaluate-what-knows');
Route::get('/mensajes-para-recordar', 'NavegationController@MessagesRemember')->name('messages-to-remember');
