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
Route::get('/', function () {
    $application_message = '';
    return view('site.welcome', compact('application_message'));
});
Route::get('/deu', function () {
    return view('site.welcome_deu');
});
Route::get('/inquiry', function () {
    return view('site.form1');
});
Route::get('/form1/deu', function () {
    return view('site.form1Deu');
});

Route::post('application', [
    'uses' => 'SendMailController@sendmail',
    'as' => 'contact.store'
]);