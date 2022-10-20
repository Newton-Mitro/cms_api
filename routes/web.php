<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site-setup', function () {
    $dbMigrate = Artisan::call('migrate:refresh');
    echo "Migration Done.";

    $dbSeed = Artisan::call('db:seed');
    echo "Database Seeding Done.";

    $optimize = Artisan::call('optimize:clear');
    echo "Optimize For Production Done.";

    $storageLink = Artisan::call('storage:link');
    echo "Storage Link Created.";
});
