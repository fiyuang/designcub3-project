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


Route::get('/','ScheduleController@index')->name('index');
Route::get('/admin','DashboardController@index')->name('dashboard');
Route::get('/patient/{id}/json','DashboardController@detailPatientJson')->name('detail.patient');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/create-appointment', 'ScheduleController@store')->name('schedule.store');
