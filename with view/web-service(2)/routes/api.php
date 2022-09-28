<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\BeritaController;

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

Route::get('/v1/berita', [BeritaController::class,'index']);
Route::get('/v1/berita/{id}/', [BeritaController::class,'show']);
Route::post('/v1/berita/simpan', [BeritaController::class,'store']);
// Route::post('/v1/berita/simpan', 'api\v1\BeritaController@store');
// Route::show('/v1/berita/show', [BeritaController::class,'show']);
