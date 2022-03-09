<?php

use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\TypesController;
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


Route::apiResource('/listings', ListingsController::class)->only(['index', 'show']);
Route::post('/addListings', [ListingsController::class, 'add']);
Route::apiResource('types', TypesController::class)->only('index');
Route::get('amenities', AmenitiesController::class);