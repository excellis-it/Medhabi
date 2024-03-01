<?php

use App\Http\Controllers\Admin\AchievementAndKeyMilestoneController;
use App\Http\Controllers\Admin\ApplicationProcessController;
use App\Http\Controllers\Admin\Admissions\BachelorCMSController;
use App\Http\Controllers\Admin\Admissions\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ForgetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CmsController as AdminCmsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\OurCoreValuesController;
use App\Http\Controllers\Admin\OurPartnershipController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\Admissions\ProgramTypesController;
use App\Http\Controllers\Admin\Admissions\CourseTypesController;
use App\Http\Controllers\Admin\Admissions\ProgramTypesCMSController;
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
        'our-core-values' => OurCoreValuesController::class,
        'our-partnerships' => OurPartnershipController::class,
        'achievement-and-key-milestones' => AchievementAndKeyMilestoneController::class,
        'application-process' => ApplicationProcessController::class,
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

    Route::prefix('our-core-values')->group(function () {
        Route::get('/our-core-values-delete/{id}', [OurCoreValuesController::class, 'delete'])->name('our-core-values.delete');
    });
    Route::get('/our-core-values-fetch-data', [OurCoreValuesController::class, 'fetchData'])->name('our-core-values.fetch-data');

    Route::prefix('our-partnerships')->group(function () {
        Route::get('/our-partnerships-delete/{id}', [OurPartnershipController::class, 'delete'])->name('our-partnerships.delete');
    });
    Route::get('/our-partnerships-fetch-data', [OurPartnershipController::class, 'fetchData'])->name('our-partnerships.fetch-data');

    Route::prefix('application-process')->group(function () {
        Route::get('/application-process-delete/{id}', [ApplicationProcessController::class, 'delete'])->name('application-process.delete');
    });
    Route::get('/application-process-fetch-data', [ApplicationProcessController::class, 'fetchData'])->name('application-process.fetch-data');

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

        Route::resources([
            'schools' => SchoolController::class,
            'program-types-cms' => ProgramTypesCMSController::class,
        ]);

        Route::prefix('schools')->group(function () {
            Route::get('/school-delete/{id}', [SchoolController::class, 'delete'])->name('schools.delete');
        });
        Route::get('/schools-fetch-data', [SchoolController::class, 'fetchData'])->name('schools.fetch-data');

        Route::prefix('program-types-cms')->group(function () {
            Route::get('/program-types-cms-delete/{id}', [ProgramTypesCMSController::class, 'delete'])->name('program-types-cms.delete');
        });
        Route::get('/program-types-cms-fetch-data', [ProgramTypesCMSController::class, 'fetchData'])->name('program-types-cms.fetch-data');
    });

    Route::prefix('admissions')->group(function () {
        Route::resources([
            'program-types' => ProgramTypesController::class,
            'course-types' => CourseTypesController::class,
            'courses' => CourseController::class,
        ]);
        Route::get('/programtypes-fetch-data', [ProgramTypesController::class, 'fetchData'])->name('program-types.fetch-data');
        Route::prefix('program-types')->name('program-types.')->group(function () {
            Route::get('/programtypes-delete/{id}', [ProgramTypesController::class, 'delete'])->name('delete');
        });
        Route::get('/coursetypes-fetch-data', [CourseTypesController::class, 'fetchData'])->name('course-types.fetch-data');
        Route::prefix('course-types')->name('course-types.')->group(function () {
            Route::get('/coursetypes-delete/{id}', [CourseTypesController::class, 'delete'])->name('delete');
        });

    });
});


Route::get('/ss', [AdminCmsController::class, 'index'])->name('home');

Route::get('/', [FrontendBlogController::class, 'index'])->name('blogs');
Route::get('/blog/{slug}', [FrontendBlogController::class, 'blogDetails'])->name('blog.details');
Route::get('/load-more-blogs', [FrontendBlogController::class, 'loadMore'])->name('load-more-blogs');

Route::get('/careers', [CmsController::class, 'career'])->name('careers');
Route::get('/careers-job-search', [CmsController::class, 'jobSearch'])->name('frontend.career.job.search');

Route::get('school/{slug}', [CmsController::class, 'school'])->name('school');
