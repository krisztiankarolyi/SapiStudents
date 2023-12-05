<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class, 'index'])->name('index');

Route::get('/students', [StudentController::class, 'getStudents'])->name('getStudents');

Route::get('/newStudent', [StudentController::class, 'newStudent'])->name('newStudent');


Route::get('students/{id}', [StudentController::class, 'getStudent'])->name('getStudent');


Route::post('/addStudent', [StudentController::class, 'addStudent'])->name('addStudent');

Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('students/edit/{student}',[StudentController::class, 'edit'])->name('students.edit');
Route::post('students/update/{student}', [StudentController::class, 'update'])->name('students.update');

