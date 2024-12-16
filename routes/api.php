<?php

use App\Http\Controllers\UserController;
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
//Route::apiResource('user', UserController::class);

 //Route::get("/getusers",[Mycontroller::class,'get_all_user']);

 Route::get('/getusers', [UserController::class, 'get_all_user']);

 //Route::get('/list', [UserController::class, 'index']);         // List posts with pagination

 Route::get('/auser/{id}', [UserController::class, 'show']);      // Show a single post

 Route::post('/create', [UserController::class, 'store']);         // Create a new post

 Route::put('/update/{id}', [UserController::class, 'update']);    // Update an existing post

 Route::delete('/delete/{id}', [UserController::class, 'delete_user']); // Delete a post



