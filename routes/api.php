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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/user', [AuthController::class, 'user']);
Route::get('/refresh', [AuthController::class, 'refresh']);

Route::ApiResource('users', UserController::class);

Route::ApiResource('post-types', PostTypeController::class);

Route::ApiResource('posts', PostController::class);
Route::get('post-types/{PostType}/posts', [PostController::class, 'getPostsByPostType'])->name('posts.getPostsByPostType');
Route::get('post-types/posts/{slug}', [PostController::class, 'getPostByPostSlug'])->name('posts.getPostByPostSlug');

Route::ApiResource('job-circulars', JobCircularController::class);
Route::ApiResource('applicants', ApplicantController::class);

Route::ApiResource('menu', MenuController::class);
Route::ApiResource('service-centers', ServiceCenterController::class);
Route::ApiResource('events', EventController::class);
Route::ApiResource('testimonials', TestimonialController::class);

Route::ApiResource('social-link', StaffSocialLinkController::class);
Route::ApiResource('staffs', StaffsController::class);
