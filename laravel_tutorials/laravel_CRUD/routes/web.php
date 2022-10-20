<?php

use App\Http\Controllers\Major\MajorController;
use App\Http\Controllers\Student\StudentController;
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
//Student Routing
Route::get('/', [StudentController::class, 'index']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/add', [StudentController::class, 'showCreateForm']);
Route::post('/students/create', [StudentController::class, 'create']);
Route::get('/students/edit/{id}', [StudentController::class, 'showEditForm']);
Route::post('/students/edit/{id}', [StudentController::class, 'edit']);
Route::delete('/students/delete/{id}', [StudentController::class, 'delete']);
Route::get('/students/search', [StudentController::class, 'search']);
Route::post('students/import', [StudentController::class, 'importCSV'])->name('students.import');
Route::get('students/export', [StudentController::class, 'exportCSV'])->name('students.export');
//Major Routing

Route::get('/majors', [MajorController::class, 'index']);
Route::get('/majors/add', [MajorController::class, 'showCreateForm']);
Route::post('/majors/create', [MajorController::class, 'create']);
Route::get('/majors/edit/{id}', [MajorController::class, 'showEditForm']);
Route::post('/majors/edit/{id}', [MajorController::class, 'edit']);
Route::delete('/majors/delete/{id}', [MajorController::class, 'delete']);
