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

Route::get('/', function () {
    return view('welcome');
});
Route::get('adminDetail','adminController@show');
Route::get('show','adminController@show');

Route::get('addway','wayController@addRoutes');
Route::post('searchBuses','wayController@addWays');

Route::get('addbus','busController@addBuses');
Route::post('busInfo','busController@getDetails');

Route::get('addPass','passController@addPass');
Route::post('showPassAdded','passController@showPassAdded');

Route::get('addTicket','ticketController@addTicket');
Route::post('showTicketAdded','ticketController@showTicketAdded');

Route::get('adddiscount','discountController@adddiscount');
Route::post('showdiscount','discountController@showdiscount');
