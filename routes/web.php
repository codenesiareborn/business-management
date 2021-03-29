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
    return view('public/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/invoice', 'InvoiceController@index')->name('invoice');
Route::get('/invoice/create', 'InvoiceController@create')->name('invoiceCreate');
Route::post('/invoice/store', 'InvoiceController@store')->name('invoiceStore');
Route::get('/invoice/edit/{id}', 'InvoiceController@edit')->name('invoiceEdit');
Route::post('/invoice/update/{id}', 'InvoiceController@update')->name('invoiceUpdate');
Route::get('/invoice/destroy/{id}', 'InvoiceController@destroy')->name('invoiceDelete');