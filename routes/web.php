<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessionController;
use App\Http\Controllers\Student_coursesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Student_courses;
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

Route::get('/', function () {
    return view("welcome");
})->middleware('auth');
// show user create form
Route::get('/register', [UserController::class, 'create']);
// store user
Route::post('/register', [UserController::class, 'store']);
// show user login form
Route::get('/login', [UserController::class, 'login'])->name('login');
// login user
Route::post('/login', [UserController::class, 'authenticate']);
// log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// manage user
Route::get('/users/manage', [UserController::class, 'manage'])->middleware('auth');
// show all students
Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
// store student
Route::post('/students', [StudentController::class, 'store'])->middleware('auth');
// show student create form
Route::get('/students/create', [StudentController::class, 'create'])->middleware('auth');
// show student edit form
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->middleware('auth');
// update student edit form
Route::put('/students/{student}', [StudentController::class, 'update'])->middleware('auth');
// destroy student
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->middleware('auth');
// manage student
Route::get('/students/manage', [StudentController::class, 'manage'])->middleware('auth');
// show single student
Route::get('/students/{student}', [StudentController::class, 'show'])->middleware('auth');
// store student courses
Route::post('/students/courses', [Student_coursesController::class, 'store'])->middleware('auth');
// destroy student courses
Route::delete('/students_courses/{students_courses}', [Student_courses::class, 'destroy'])->middleware('auth');
// show all course
Route::get('/courses', [CourseController::class, 'index'])->middleware('auth');
// show course create form
Route::get('/courses/create', [CourseController::class, 'create'])->middleware('auth');
// store course create form
Route::post('/courses', [CourseController::class, 'store'])->middleware('auth');
// edit course form
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->middleware('auth');
// update course edit form
Route::put('/courses/{course}', [CourseController::class, 'update'])->middleware('auth');
// destroy course
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->middleware('auth');
// manage student
Route::get('/courses/manage', [CourseController::class, 'manage'])->middleware('auth');
// show single course
Route::get('/courses/{course}', [CourseController::class, 'show'])->middleware('auth');
// show all lessions
Route::get('/lessions', [LessionController::class, 'index'])->middleware('auth');
// show lession create form
Route::get('/lessions/create', [LessionController::class, 'create'])->middleware('auth');
// store lession create form
Route::post('/lessions', [LessionController::class, 'store'])->middleware('auth');
// destroy lession
Route::delete('/lessions/{lession}', [LessionController::class, 'destroy'])->middleware('auth');
// manage lession
Route::get('/lessions/manage', [LessionController::class, 'manage'])->middleware('auth');
// show single lession
Route::get('/lessions/{lession}', [LessionController::class, 'show'])->middleware('auth');
// show all attendances
Route::get('/attendances', [AttendanceController::class, 'index'])->middleware('auth');
// show attendance create form
Route::get('/attendances/create', [AttendanceController::class, 'create'])->middleware('auth');
// show single attendance
Route::get('/attendances/{attendance}', [AttendanceController::class, 'show'])->middleware('auth');
// store attendance create form
Route::post('/attendances', [AttendanceController::class, 'store'])->middleware('auth');
// destroy lession
Route::delete('/attendances/{attendance}', [AttendanceController::class, 'destroy'])->middleware('auth');

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show show form to edit listing
// update - Update listing
// destroy - Delete listing