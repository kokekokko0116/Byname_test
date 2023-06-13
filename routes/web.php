<?php

use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkMyprofileController;
use Faker\Extension\PhoneNumberExtension;

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

Route::middleware('auth')->group(function () {
    Route::post('/work_myprofile/form_three', [WorkMyprofileController::class, 'form_three'])->name('work_myprofile.form_three');
    Route::post('/work_myprofile/form_two', [WorkMyprofileController::class, 'form_two'])->name('work_myprofile.form_two');
    Route::post('/work_myprofile/form_one', [WorkMyprofileController::class, 'form_one'])->name('work_myprofile.form_one');
    Route::get('/work_myprofile/form_photo', [WorkMyprofileController::class, 'form_photo'])->name('work_myprofile.form_photo');
    Route::post('/work_myprofile/photo_store', [WorkMyprofileController::class, 'photo_store'])->name('work_myprofile.photo_store');
    Route::resource('send', SendController::class);
    Route::resource('work_myprofile', WorkMyprofileController::class);
});

Route::get('send/accept/{user_id}', [SendController::class, 'accept'])->name('send.accept');

Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
