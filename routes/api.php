<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

// Resource 
// Route::resource('products', ProductController::class);

// Public routes
// Register method 
Route::post('/register', [AuthController::class, 'register']);

// This is for the Login in
Route::post('/login', [AuthController::class, 'login']);

// This is for the index 
Route::get('/products', [ProductController::class, 'index']);

// This is for the search
Route::get('/products/search/{name}', [ProductController::class, 'search']);

// This is for the show 
Route::get('/products/{id}', [ProductController::class, 'show']);



// Protect the routes 
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Copy the routes and paste them here so they can be protected 
    // This is for the store
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);

});

// Route::get('/products', [ProductController::class, 'index']);

// Route::post('/products', [ProductController::class, 'store']);

// Route::get('/products', [ProductController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
