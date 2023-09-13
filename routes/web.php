<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'home'])->name('home');
// Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/admin', [BackendController::class, 'admin'])->name('admin');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register/store', [UserController::class, 'registerStore'])->name('register.store');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/store', [UserController::class, 'loginStore'])->name('login.store');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// header fields
Route::get('/courses', [ChapterController::class, 'courses'])->name('courses');
Route::get('/courses/{course_name}', [ChapterController::class, 'courses_name'])->name('courses.show');


// user route

Route::prefix('admin/users')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
});


Route::prefix('admin/chapter')->group(function () {
    Route::get('/index', [ChapterController::class, 'index'])->name('chapter.index');
    Route::get('/create', [ChapterController::class, 'create'])->name('chapter.create');
    Route::post('/store', [ChapterController::class, 'store'])->name('chapter.store');
    Route::get('/delete/{id}', [ChapterController::class, 'delete'])->name('chapter.delete');
    Route::get('/edit/{id}', [ChapterController::class, 'edit'])->name('chapter.edit');
    Route::post('/update/{id}', [ChapterController::class, 'update'])->name('chapter.update');
});

Route::prefix('admin/lesson')->group(function () {
    Route::get('/index', [LessonController::class, 'index'])->name('lesson.index');
    Route::get('/create', [LessonController::class, 'create'])->name('lesson.create');
    Route::post('/store', [LessonController::class, 'store'])->name('lesson.store');
    Route::get('/delete/{id}', [LessonController::class, 'delete'])->name('lesson.delete');
    Route::get('/edit/{id}', [LessonController::class, 'edit'])->name('lesson.edit');
    Route::post('/update/{id}', [LessonController::class, 'update'])->name('lesson.update');
    Route::get('/info/{id}', [LessonController::class, 'info'])->name('lesson.info');
});
