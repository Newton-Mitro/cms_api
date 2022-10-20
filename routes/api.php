<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\PostTypeController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\JobCircularController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceCenterController;
use App\Http\Controllers\StaffSocialLinkController;
use App\Http\Controllers\StaffTypeController;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @updatedAt      : 15-10-2022
 * @description    : All api Routes.
 *========================================================================**/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers',], function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/refresh', [AuthController::class, 'refresh']);
});

Route::ApiResource('users', UserController::class);

Route::ApiResource('menus', MenuController::class);
Route::get('root/menus', [MenuController::class, 'rootMenus'])->name('menus.rootMenus');

Route::ApiResource('post-types', PostTypeController::class);
Route::ApiResource('posts', PostController::class);
Route::get('posts/post-types/{PostType}', [PostController::class, 'getPostsByPostType'])->name('posts.getPostsByPostType');
Route::get('posts/post-slug/{slug}', [PostController::class, 'getPostByPostSlug'])->name('posts.getPostByPostSlug');

Route::ApiResource('job-circulars', JobCircularController::class);
Route::ApiResource('applicants', ApplicantController::class);
Route::get('application/{applicant_id}/status/{status_id}', [ApplicantController::class, 'updateApplicationStatus'])->name('application.updateApplicationStatus');

Route::ApiResource('service-centers', ServiceCenterController::class);

Route::ApiResource('events', EventController::class);

Route::ApiResource('testimonials', TestimonialController::class);

Route::ApiResource('staff-types', StaffTypeController::class);
Route::ApiResource('staffs', StaffsController::class);
