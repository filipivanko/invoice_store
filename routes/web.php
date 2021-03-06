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

Route::get('/', 'IndexController@index');

Route::get("/fakture" , 'InvoicesController@displayAllInvoices');
Route::post("/spremi_fakturu" , 'InvoicesController@storeInvoice');
Route::get("/vidi_fakturu" , function (){
   return \App\Invoice::first();
});