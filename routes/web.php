<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view();
});

Route::get(
    '/courses/list',
    [CourseController::class, 'list']
)->name('list');

// primer vracanja stranice bez podataka (AJAX) (kontraprimer u CourseController.list)
//Route::view('/courses/professors/', 'professors');

Route::get(
    '/professors',
    [ProfessorController::class, 'list']
)->name('professors');

Route::get(
    '/students',
    [StudentController::class, 'list']
)->name('students');
