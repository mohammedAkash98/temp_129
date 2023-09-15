<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isAdmin;
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
Route::get('/admin', [BackendController::class, 'admin'])->name('admin')->middleware(['auth', isAdmin::class]);

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register/store', [UserController::class, 'registerStore'])->name('register.store');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/store', [UserController::class, 'loginStore'])->name('login.store');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//student route
Route::prefix('student')->middleware(['auth'])->group(function () {
    Route::get('/courses', [ChapterController::class, 'courses'])->name('courses');
    Route::get('/courses/{id}', [ChapterController::class, 'courses_name'])->name('courses.show');
    Route::get('/courses/lesson/{id}', [ChapterController::class, 'courses_view'])->name('courses.view');
    Route::get('/courses/lesson/quiz/{id}', [QuizController::class, 'quiz_view'])->name('quiz.view');
    Route::post('/courses/lesson/quiz/store', [QuizController::class, 'quiz_answer_store'])->name('quiz.answer.store');
    Route::get('/courses/lesson/quiz/result', [QuizController::class, 'quiz_result'])->name('quiz.result');
    Route::get('/profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::post('/profile/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/profile/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
    Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about-us');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/seminar', [FrontendController::class, 'seminar'])->name('seminar');
    Route::get('/video', [FrontendController::class, 'video'])->name('video');
});



//admin user route

Route::prefix('admin/users')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::post('/search', [UserController::class, 'search'])->name('user.search');
});

//admin chapter route
Route::prefix('admin/chapter')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [ChapterController::class, 'index'])->name('chapter.index');
    Route::get('/create', [ChapterController::class, 'create'])->name('chapter.create');
    Route::post('/store', [ChapterController::class, 'store'])->name('chapter.store');
    Route::get('/delete/{id}', [ChapterController::class, 'delete'])->name('chapter.delete');
    Route::get('/edit/{id}', [ChapterController::class, 'edit'])->name('chapter.edit');
    Route::post('/update/{id}', [ChapterController::class, 'update'])->name('chapter.update');
});

//admin lesson route
Route::prefix('admin/lesson')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [LessonController::class, 'index'])->name('lesson.index');
    Route::get('/create', [LessonController::class, 'create'])->name('lesson.create');
    Route::post('/store', [LessonController::class, 'store'])->name('lesson.store');
    Route::get('/delete/{id}', [LessonController::class, 'delete'])->name('lesson.delete');
    Route::get('/edit/{id}', [LessonController::class, 'edit'])->name('lesson.edit');
    Route::post('/update/{id}', [LessonController::class, 'update'])->name('lesson.update');
    Route::get('/info/{id}', [LessonController::class, 'info'])->name('lesson.info');
});

//admin quiz route
Route::prefix('admin/quiz')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [QuizController::class, 'index'])->name('quiz.index');
    Route::get('/create', [QuizController::class, 'create'])->name('quiz.create');
    Route::post('/store', [QuizController::class, 'store'])->name('quiz.store');
    Route::get('/info/{id}', [QuizController::class, 'info'])->name('quiz.info');
    Route::get('/delete/{id}', [QuizController::class, 'delete'])->name('quiz.delete');
    Route::get('/edit/{id}', [QuizController::class, 'edit'])->name('quiz.edit');
    Route::post('/update/{id}', [QuizController::class, 'update'])->name('quiz.update');
});

//pdf route

Route::prefix('pdf')->middleware(['auth'])->group(function () {
    Route::get('/user/report', [PdfController::class, 'userPdfReport'])->name('user.pdf.report');
    Route::get('/chapter/report', [PdfController::class, 'chapterPdfReport'])->name('chapter.pdf.report');
});
