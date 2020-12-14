<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return view('welcome');
})->name('welcome');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dash');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/cases', 'HomeController@cases')->name('cases');
Route::get('/ratings', 'HomeController@ratings')->name('ratings');
Route::get('/reviews', 'HomeController@reviews')->name('reviews');
Route::any('/search', 'HomeController@search')->name('search');
Route::get('/client-request', 'HomeController@requests')->name('client-request');
Route::get('/lawyer-request-decide', 'HomeController@lawyerRequestDecide')->name('lawyer-request-decide');
Route::get('/lawyer-request-case', 'HomeController@lawyerRequestCase')->name('lawyer.request-case');
Route::get('/lawyer-result-decide', 'HomeController@lawyerResultDecide')->name('lawyer-result-decide');


Route::resource('/lawyer', 'LawyerController');
Route::resource('/client', 'ClientController');
Route::resource('/court', 'CourtController');
Route::resource('/casefile', 'CaseFileController');
Route::resource('/notice', 'NoticeController');
Route::resource('/feedback', 'FeedbackController');
Route::resource('/rating', 'RatingController');


Route::get('/register-details', 'WelcomeController@registerDetails')->name('register-details');
Route::get('/contact-us', 'WelcomeController@contactUs')->name('contact-us');
Route::post('/get-districts', 'WelcomeController@getDistricts')->name('get-districts');



Route::get('/faq', 'FaqController@index')->name('faq');
Route::any('/give-rating', 'RatingController@give_rating')->name('give-rating');


Route::any('locale/{locale}', function($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale');