<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ForgetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CmsController as AdminCmsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\Admissions\ProgramTypesController;
use App\Http\Controllers\Admin\Admissions\CourseTypesController;
use App\Http\Controllers\Admin\Admissions\CoursesController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\CmsController;
use Illuminate\Support\Facades\Artisan;

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

// Clear cache
Route::get('clear', function () {
    Artisan::call('optimize:clear');
    return "Optimize clear has been successfully";
});

Route::get('/admin', [AuthController::class, 'redirectAdminLogin']);
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/login-check', [AuthController::class, 'loginCheck'])->name('admin.login.check');  //login check
Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('admin.forget.password');
Route::post('change-password', [ForgetPasswordController::class, 'changePassword'])->name('admin.change.password');
Route::get('forget-password/show', [ForgetPasswordController::class, 'forgetPasswordShow'])->name('admin.forget.password.show');
Route::get('reset-password/{id}/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('admin.reset.password');
Route::post('change-password', [ForgetPasswordController::class, 'changePassword'])->name('admin.change.password');

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::post('profile/update', [ProfileController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::prefix('password')->group(function () {
        Route::get('/', [ProfileController::class, 'password'])->name('admin.password'); // password change
        Route::post('/update', [ProfileController::class, 'passwordUpdate'])->name('admin.password.update'); // password update
    });

    Route::resources([
        'blogs' => BlogController::class,
        'faq' => FaqController::class,
        'testimonials' => TestimonialController::class,
        'jobs' => JobController::class,
        'programTypes' => ProgramTypesController::class,
    ]);

    Route::prefix('blogs')->group(function () {
        Route::get('/blog-delete/{id}', [BlogController::class, 'delete'])->name('blogs.delete');
    });
    Route::get('/changeBlogStatus', [BlogController::class, 'changeBlogStatus'])->name('blogs.change-status');
    Route::get('/blogs-fetch-data', [BlogController::class, 'fetchData'])->name('blogs.fetch-data');

    Route::prefix('faq')->group(function () {
        Route::get('/faq-delete/{id}', [FaqController::class, 'delete'])->name('faq.delete');
    });
    Route::get('/faq-fetch-data', [FaqController::class, 'fetchData'])->name('faq.fetch-data');

    Route::prefix('testimonials')->group(function () {
        Route::get('/testimonials-delete/{id}', [TestimonialController::class, 'delete'])->name('testimonials.delete');
    });
    Route::get('/testimonials-fetch-data', [TestimonialController::class, 'fetchData'])->name('testimonials.fetch-data');

    Route::prefix('jobs')->group(function () {
        Route::get('/jobs-delete/{id}', [JobController::class, 'delete'])->name('jobs.delete');
    });
    Route::get('/jobs-fetch-data', [JobController::class, 'fetchData'])->name('jobs.fetch-data');
    Route::get('/change-jobs-status', [JobController::class, 'changeStatus'])->name('jobs.change-status');

    Route::prefix('pages')->group(function () {
        Route::prefix('career')->name('career.')->group(function () {
            Route::get('/', [PageController::class, 'career'])->name('index');
            Route::post('/update', [PageController::class, 'careerUpdadte'])->name('update');
        });
    });

    Route::prefix('admissions')->group(function () {
        Route::prefix('program-types')->name('programTypes.')->group(function () {
            Route::get('/', [ProgramTypesController::class, 'index'])->name('index');
            Route::get('/fetch-data', [ProgramTypesController::class, 'fetchData'])->name('fetch-data');
            Route::get('program-types-delete/{id}', [ProgramTypesController::class, 'delete'])->name('delete');
        });
        Route::prefix('course-types')->name('courseTypes.')->group(function () {
            Route::get('/', [CourseTypesController::class, 'index'])->name('index');
        });
        Route::prefix('courses')->name('courses.')->group(function () {
            Route::get('/', [CoursesController::class, 'index'])->name('index');
        });
    });
});


Route::get('/ss', [AdminCmsController::class, 'index'])->name('home');

Route::get('/', [FrontendBlogController::class, 'index'])->name('blogs');
Route::get('/blog/{slug}', [FrontendBlogController::class, 'blogDetails'])->name('blog.details');
Route::get('/load-more-blogs', [FrontendBlogController::class, 'loadMore'])->name('load-more-blogs');

Route::get('/careers', [CmsController::class, 'career'])->name('careers');
