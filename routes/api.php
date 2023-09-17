<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('homedata', [ApiController::class, 'get_home_data']);
Route::get('homeContents', [ApiController::class, 'get_home_contents']);
Route::get('webinars', [ApiController::class, 'get_webinars']);
Route::get('teams', [ApiController::class, 'get_teams']);
Route::get('svccs', [ApiController::class, 'get_svccs']);
Route::get('activity_sheets', [ApiController::class, 'get_activity_sheets']);
Route::get('others', [ApiController::class, 'get_others']);
