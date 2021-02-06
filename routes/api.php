<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'students' => StudentController::class,
    'professors' => ProfessorController::class,
    'courses' => CourseController::class
]);

/* Route::get('/student/{student}', [StudentController::class, 'show']); */

/* Route::get('/professors', [ProfessorController::class, 'index']); */

/* Route::get('/courses', [CourseController::class, 'index']); */
