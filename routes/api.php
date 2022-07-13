<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'] ,function() {
    Route::get('companies', [App\Http\Controllers\Api\CompanyController::class, 'getCompanies']);
    Route::get('clients/{company_id}', [App\Http\Controllers\Api\ClientController::class, 'getClientsByCompany']);
    Route::get('client_companies/{client_id}', [App\Http\Controllers\Api\CompanyController::class, 'getCompaniesByClient']);
});
