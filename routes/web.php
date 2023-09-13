<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', [FrontendController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/admin', [BackendController::class, 'admin'])->name('admin');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register/store', [UserController::class, 'registerStore'])->name('register.store');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/store', [UserController::class, 'loginStore'])->name('login.store');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//student route
Route::prefix('student')->middleware(['auth'])->group(function () {
    Route::get('/profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::post('/profile/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/profile/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
});


//admin user route

Route::prefix('admin/users')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
});

//admin chapter route
Route::prefix('admin/chapter')->group(function () {
    Route::get('/index', [ChapterController::class, 'index'])->name('chapter.index');
    Route::get('/create', [ChapterController::class, 'create'])->name('chapter.create');
    Route::post('/store', [ChapterController::class, 'store'])->name('chapter.store');
    Route::get('/delete/{id}', [ChapterController::class, 'delete'])->name('chapter.delete');
    Route::get('/edit/{id}', [ChapterController::class, 'edit'])->name('chapter.edit');
    Route::post('/update/{id}', [ChapterController::class, 'update'])->name('chapter.update');
});

//admin lesson route
Route::prefix('admin/lesson')->group(function () {
    Route::get('/index', [LessonController::class, 'index'])->name('lesson.index');
    Route::get('/create', [LessonController::class, 'create'])->name('lesson.create');
    Route::post('/store', [LessonController::class, 'store'])->name('lesson.store');
    Route::get('/delete/{id}', [LessonController::class, 'delete'])->name('lesson.delete');
    Route::get('/edit/{id}', [LessonController::class, 'edit'])->name('lesson.edit');
    Route::post('/update/{id}', [LessonController::class, 'update'])->name('lesson.update');
    Route::get('/info/{id}', [LessonController::class, 'info'])->name('lesson.info');
});

//admin quiz route
Route::prefix('admin/quiz')->group(function () {
    Route::get('/index', [QuizController::class, 'index'])->name('quiz.index');
    Route::get('/create', [QuizController::class, 'create'])->name('quiz.create');
    Route::post('/store', [QuizController::class, 'store'])->name('quiz.store');
    Route::get('/info/{id}', [QuizController::class, 'info'])->name('quiz.info');
    Route::get('/delete/{id}', [QuizController::class, 'delete'])->name('quiz.delete');
});
