<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RecruterController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\UploadVideoController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\Auth\CandidateGoogleController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\Admin\TeamController as AdminTeamController;
use App\Http\Controllers\VisionaryController;
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

Auth::routes();

Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');
Route::get('/admin/logout', [LoginController::class, 'adminLogout'])->name('admin.logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    //admin password reset routes
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])
        ->name('admin.password.email');
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
        ->name('admin.password.request');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('admin.password.update');
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
        ->name('admin.password.reset');
});

Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
Route::prefix('candidate/google')->name('candidate.google.')->group(function () {
    Route::get('login', [CandidateGoogleController::class, 'loginWithGoogle'])->name('login');
});
Route::any('candidate-google/callback', [CandidateGoogleController::class, 'callbackFromGoogle'])->name('callback');



Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function () {
    //All the routes that belongs to the group goes here
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/contact-enquiry', [DashboardController::class, 'getcontactEnquiry'])->name('admin.contact.index');
    Route::group(['prefix' => 'candidate'], function () {
        Route::get('/', [CandidateController::class, 'index'])->name('admin.candidate.index');
        Route::get('/detail/{id}', [CandidateController::class, 'show'])->name('admin.candidate.show');
        Route::post('/schedule-interview', [CandidateController::class, 'scheduleInterview'])->name('admin.candidate.scheduleInterview');
        Route::get('/change-status/{id}/{status}', [CandidateController::class, 'changeStatus'])->name('admin.candidate.changestatus');
        Route::get('/change-result/{id}/{result}', [CandidateController::class, 'changeResult'])->name('admin.candidate.changeresult');
    });
    Route::group(['prefix' => 'team'], function () {
        Route::get('/', [AdminTeamController::class, 'index'])->name('admin.team.index');
        Route::post('/save',[AdminTeamController::class,'store'])->name('admin.team.store');
        Route::delete('/delete/{id}',[AdminTeamController::class,'destroy'])->name('admin.team.delete');
    });
    Route::group(['prefix' => 'recruter'], function () {
        Route::get('/', [RecruterController::class, 'index'])->name('admin.recruter.index');
        Route::get('/add', [RecruterController::class, 'add'])->name('admin.recruter.add');
        Route::post('/save', [RecruterController::class, 'store'])->name('admin.recruter.store');
        Route::get('/details/{id}', [RecruterController::class, 'detail'])->name('admin.recruter.detail');
        Route::post('/update', [RecruterController::class, 'update'])->name('admin.recruter.update');
    });

    Route::group(['prefix' => 'upload-video'], function () {
        Route::get('/', [UploadVideoController::class, 'index'])->name('admin.upload-video.index');
        Route::post('/save', [UploadVideoController::class, 'store'])->name('admin.upload-video.store');
    });
});

// front routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/our-team', [TeamController::class, 'index'])->name('our-team');
Route::get('/visionary', [VisionaryController::class, 'index'])->name('visionary');
Route::get('/video-count', [VisionaryController::class, 'videoCount'])->name('video-count');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/apply-now', [ApplyController::class, 'index'])->name('apply-now');
Route::post('/apply-job', [ApplyController::class, 'store'])->name('apply-job');
Route::post('/contact-enquiry', [HomeController::class, 'contactEnquiry'])->name('contact-enquiry');
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/candidate-profile', [HomeController::class, 'candidateProfile'])->name('candidate-profile');
    Route::get('/candidate-job-profile', [HomeController::class, 'candidateJobProfile'])->name('candidate-job-profile');
    Route::post('/store-candidate-job-profile', [HomeController::class, 'storeCandidateJobProfile'])->name('store-candidate-job-profile');
});
Route::post('/update-profile', [HomeController::class, 'updateProfile'])->name('update-profile');
Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update-password');
Route::get('/job-questions', [ApplyController::class, 'jobQuestions'])->name('job-questions');
