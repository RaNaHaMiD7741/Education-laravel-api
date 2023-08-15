<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HeadController;
use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\ManagingCommityController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;


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
//Category
Route::get('/categories', [CategoryController::class, 'index']);
//Head
Route::get('/heads', [HeadController::class, 'index']);
//Institute
Route::get('/institutes', [InstituteController::class, 'index']);
//Managing Commite
Route::get('/managing-commite', [ManagingCommityController::class, 'index']);
//Result
Route::get('/result', [ResultController::class, 'index']);
//Sub Category
Route::get('/sub-categories', [SubCategoryController::class, 'index']);
//Teacher
Route::get('/teacher', [TeacherController::class, 'index']);
//Users
Route::get('/users', [UserController::class, 'index']);