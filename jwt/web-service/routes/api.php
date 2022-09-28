<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\BeritaController;
use App\Http\Controllers\api\v1\RegisterController;
use App\Http\Controllers\api\v1\LoginController;
use App\Http\Controllers\api\v1\LogoutController;

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

Route::resource('/v1/beritas', BeritaController::class);
Route::get('/v1/beritas/search/{judul}', [BeritaController::class, 'search']);
// Route::post('/v1/beritas', [BeritaController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * route "/v1/register"
 * @method "POST"
 */
Route::post('/v1/register', RegisterController::class)->name('register');

/**
 * route "/v1/login"
 * @method "POST"
 */
Route::post('/v1/login', LoginController::class)->name('login');

/**
 * route "/v1/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('/v1/user', function (Request $request) {
    return $request->user();
});

/**
 * route "/v1/logout"
 * @method "POST"
 */
Route::post('/v1/logout', LogoutController::class)->name('logout');
