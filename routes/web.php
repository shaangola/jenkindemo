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

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('services', function()
{
    return View::make('pages.services');
});
Route::get('careers', function()
{
    return View::make('pages.careers');
});
Route::get('team', function()
{
    return View::make('pages.team');
});



Route::get('contact', 'ContactController@index')->name('contact.index');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::post('subscriber', 'ContactController@subscriber')->name('contact.subscriber');
Route::post('submit', 'ContactController@submit')->name('contact.submit');
Route::get('submit', function () {
    return redirect('/contact');
});