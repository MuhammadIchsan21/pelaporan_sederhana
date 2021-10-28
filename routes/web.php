<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', 'ServicesController@index')
            ->name('services.index');
Route::get('/home', 'ServicesController@index');

Route::get('/home/create', 'ServicesController@create')
            ->name('services-create')
            ->middleware(['auth']);

Route::post('/home/create/', 'ServicesController@store')
            ->name('services.store')
            ->middleware(['auth']);

Route::resource('dashboard', 'DashboardController')
            ->middleware(['auth', 'admin']);

Auth::routes();


