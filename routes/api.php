<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostTypeController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\JobHistoryController;
use App\Http\Controllers\JobCircularController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceCenterController;
use App\Http\Controllers\ExecutiveSocialLinkController;
use App\Http\Controllers\ManagementExecutivesController;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @updatedBy      :  Newton Mitro
 * @email          :  israfil@cccul.com
 * @repo           :
 * @createdOn      :  3-10-2022
 * @description    :  All api Route.
 *========================================================================**/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::ApiResource('post-types', PostTypeController::class);
Route::ApiResource('posts', PostController::class);
Route::ApiResource('job-circulars', JobCircularController::class);
Route::ApiResource('applicants', ApplicantController::class);

Route::group(['prefix' => 'applicants'], function () {
    Route::apiResource('/eductions', EducationController::class);
    Route::apiResource('/jobHistories', JobHistoryController::class);
    Route::apiResource('/trainings', TrainingController::class);
});

Route::ApiResource('menu', MenuController::class);
Route::ApiResource('service-centers', ServiceCenterController::class);
Route::ApiResource('events', EventController::class);
// Route::ApiResource('testimonials', TestimonialController::class);
Route::ApiResource('managements', ManagementExecutivesController::class);

Route::ApiResource('social-link', ExecutiveSocialLinkController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/user', [AuthController::class, 'user']);
Route::get('/refresh', [AuthController::class, 'refresh']);
