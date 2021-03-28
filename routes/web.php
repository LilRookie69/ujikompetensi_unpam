<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::view('/', 'index');
Route::resource('students', StudentsController::class);
//Students
// Route::get('/students', [StudentsController::class, 'index']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
// Route::patch('/students/{student}', [StudentsController::class, 'update']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);