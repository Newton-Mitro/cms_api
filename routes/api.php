<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :
 * @createdOn      :  3-10-2022
 * @description    :  All api Route.
 *========================================================================**/

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::ApiResource('post-types', 'App\Http\Controllers\PostTypeController');
Route::ApiResource('posts', 'App\Http\Controllers\PostController');
Route::ApiResource('job-positions', 'App\Http\Controllers\JobPositionController');
Route::ApiResource('job-circulars', 'App\Http\Controllers\JobCircularController');
Route::ApiResource('applicants', 'App\Http\Controllers\ApplicantController');

Route::group(['prefix' => 'applicants'], function () {
    Route::apiResource('/eductions', 'App\Http\Controllers\EducationController');
    Route::apiResource('/jobHistories', 'App\Http\Controllers\JobHistoryController');
    Route::apiResource('/trainings', 'App\Http\Controllers\TrainingController');
});

Route::ApiResource('menu', 'App\Http\Controllers\MenuController');
Route::ApiResource('service-centers', 'App\Http\Controllers\ServiceCenterController');
Route::ApiResource('events', 'App\Http\Controllers\EventController');
Route::ApiResource('testimonials', 'App\Http\Controllers\TestimonialController');
Route::ApiResource('managements', 'App\Http\Controllers\ManagementExecutivesController');

Route::ApiResource('social-link', 'App\Http\Controllers\ExecutiveSocialLinkController');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/user', [AuthController::class, 'user']);
Route::get('/refresh', [AuthController::class, 'refresh']);
