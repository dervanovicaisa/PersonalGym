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
    $invoice_message = '';
    return view('site.welcome', compact('invoice_message'));
});
Route::get('/deu', function () {
    return view('site.welcome_deu');
});
Route::get('/form1', function () {
    return view('site.form1');
});
Route::get('/form1/deu', function () {
    return view('site.form1Deu');
});
Route::get('/test', function () {
    return view('site.test');
});
Route::post('Invoice', [
    'uses' => 'SendMailController@sendmail',
    'as' => 'contact.store'
]);
