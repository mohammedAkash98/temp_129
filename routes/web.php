<?php

use App\Http\Controllers\ActivitySheetController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeContentController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SvccController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebinarController;
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


Route::get('/', [FrontendController::class, 'index'])->name('home_page');
Route::get('/faq', [FrontendController::class, 'home_faq'])->name('home_faq');
Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('dashboard')->middleware('auth');
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
    Route::get('/courses/lesson/quiz/{chapter_id}/{lesson_id}', [QuizController::class, 'quiz_view'])->name('quiz.view');
    Route::post('/courses/lesson/quiz/store', [QuizController::class, 'quiz_answer_store'])->name('quiz.answer.store');
    Route::get('/courses/lesson/quiz/result', [QuizController::class, 'quiz_result'])->name('quiz.result');
    Route::get('/profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::post('/profile/password/update/{id}', [StudentController::class, 'profile_password_update'])->name('student.profile.password.update');
    Route::post('/profile/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/profile/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
    Route::get('/certificate', [StudentController::class, 'certificate'])->name('student.certificate');
    Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about-us');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    // Route::get('/seminar', [FrontendController::class, 'seminar'])->name('seminar');
    Route::get('/seminar', [FrontendController::class, 'seminar_index'])->name('seminar.frontend.index');
    Route::get('/seminar/show/{id}', [FrontendController::class, 'seminar_show'])->name('seminar.frontend.show');
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
    Route::get('/student/certificate', [PdfController::class, 'studentPdfCertificate'])->name('student.pdf.certificate');
});





//admin webinar route

Route::prefix('admin/webinar')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [WebinarController::class, 'index'])->name('webinar.index');
    Route::get('/create', [WebinarController::class, 'create'])->name('webinar.create');
    Route::post('/store', [WebinarController::class, 'store'])->name('webinar.store');

    Route::get('/info/{id}', [WebinarController::class, 'info'])->name('webinar.info');
    Route::get('/delete/{id}', [WebinarController::class, 'delete'])->name('webinar.delete');
    Route::get('/edit/{id}', [WebinarController::class, 'edit'])->name('webinar.edit');
    Route::post('/update/{id}', [WebinarController::class, 'update'])->name('webinar.update');
});

//admin team route
Route::prefix('admin/team')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [TeamController::class, 'index'])->name('team.index');
    Route::get('/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/info/{id}', [TeamController::class, 'info'])->name('team.info');
    Route::get('/delete/{id}', [TeamController::class, 'delete'])->name('team.delete');
    Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/update/{id}', [TeamController::class, 'update'])->name('team.update');
});

//admin home content route
Route::prefix('admin/home_content')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [HomeContentController::class, 'index'])->name('home_content.index');
    Route::get('/create', [HomeContentController::class, 'create'])->name('home_content.create');
    Route::post('/store', [HomeContentController::class, 'store'])->name('home_content.store');
    Route::get('/info/{id}', [HomeContentController::class, 'info'])->name('home_content.info');
    Route::get('/delete/{id}', [HomeContentController::class, 'delete'])->name('home_content.delete');
    Route::get('/edit/{id}', [HomeContentController::class, 'edit'])->name('home_content.edit');
    Route::post('/update/{id}', [HomeContentController::class, 'update'])->name('home_content.update');
});
//admin svcc route
Route::prefix('admin/svcc')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [SvccController::class, 'index'])->name('svcc.index');
    Route::get('/create', [SvccController::class, 'create'])->name('svcc.create');
    Route::post('/store', [SvccController::class, 'store'])->name('svcc.store');
    Route::get('/info/{id}', [SvccController::class, 'info'])->name('svcc.info');
    Route::get('/delete/{id}', [SvccController::class, 'delete'])->name('svcc.delete');
    Route::get('/edit/{id}', [SvccController::class, 'edit'])->name('svcc.edit');
    Route::post('/update/{id}', [SvccController::class, 'update'])->name('svcc.update');
});
//admin activity sheet route
Route::prefix('admin/activity_sheet')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [ActivitySheetController::class, 'index'])->name('activity_sheet.index');
    Route::get('/create', [ActivitySheetController::class, 'create'])->name('activity_sheet.create');
    Route::post('/store', [ActivitySheetController::class, 'store'])->name('activity_sheet.store');
    Route::get('/delete/{id}', [ActivitySheetController::class, 'delete'])->name('activity_sheet.delete');
    Route::get('/edit/{id}', [ActivitySheetController::class, 'edit'])->name('activity_sheet.edit');
    Route::post('/update/{id}', [ActivitySheetController::class, 'update'])->name('activity_sheet.update');
});

//admin others  route
Route::prefix('admin/others')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [OtherController::class, 'index'])->name('other.index');
    Route::get('/create', [OtherController::class, 'create'])->name('other.create');
    Route::post('/store', [OtherController::class, 'store'])->name('other.store');
    Route::get('/info/{id}', [OtherController::class, 'info'])->name('other.info');
    Route::get('/delete/{id}', [OtherController::class, 'delete'])->name('other.delete');
    Route::get('/edit/{id}', [OtherController::class, 'edit'])->name('other.edit');
    Route::post('/update/{id}', [OtherController::class, 'update'])->name('other.update');
});
//admin seminar route
Route::prefix('admin/seminar')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/index', [SeminarController::class, 'index'])->name('seminar.index');
    Route::get('/create', [SeminarController::class, 'create'])->name('seminar.create');
    Route::post('/store', [SeminarController::class, 'store'])->name('seminar.store');

    Route::get('/info/{id}', [SeminarController::class, 'info'])->name('seminar.info');
    Route::get('/delete/{id}', [SeminarController::class, 'delete'])->name('seminar.delete');
    Route::get('/edit/{id}', [SeminarController::class, 'edit'])->name('seminar.edit');
    Route::post('/update/{id}', [SeminarController::class, 'update'])->name('seminar.update');
});

//resource route
Route::prefix('resource')->group(function () {
    Route::get('/svcc/index', [ResourceController::class, 'svcc_index'])->name('svcc.frontend.index');
    Route::get('/activity_sheet/index', [ResourceController::class, 'activity_sheet_index'])->name('activity.sheet.frontend.index');
    Route::get('/others/index', [ResourceController::class, 'others_index'])->name('others.frontend.index');
    Route::get('/others/show/{id}', [ResourceController::class, 'others_show'])->name('others.frontend.show');
});
