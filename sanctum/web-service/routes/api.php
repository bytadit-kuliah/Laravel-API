<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\BeritaController;
use App\Http\Controllers\api\v1\UserController;

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

// Route::resource('/v1/beritas', BeritaController::class);

// Public Routes
Route::post('/v1/register', [UserController::class, 'register']);
Route::post('/v1/login', [UserController::class, 'login']);
Route::get('/v1/beritas', [BeritaController::class, 'index']);
Route::get('/v1/beritas/{id}', [BeritaController::class, 'show']);
Route::get('/v1/beritas/search/{judul}', [BeritaController::class, 'search']);

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/v1/beritas', [BeritaController::class, 'store']);
    Route::put('/v1/beritas/{id}', [BeritaController::class, 'update']);
    Route::delete('/v1/beritas/{id}', [BeritaController::class, 'destroy']);
    Route::post('/v1/logout', [UserController::class, 'logout']);

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
