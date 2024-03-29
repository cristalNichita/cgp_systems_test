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

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('index');
    });

    Route::resources([
        'clients' => App\Http\Controllers\ClientController::class,
        'companies' => App\Http\Controllers\CompanyController::class,
    ]);
});
