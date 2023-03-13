<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\User\UsersController;
use App\Http\Controllers\Book\CoverageController;
use App\Http\Controllers\Book\ShareBookController;
use App\Http\Controllers\Book\UploadeCoverageFile;
use App\Http\Controllers\User\UsersRoleController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Book\PreviewBookController;
use App\Http\Controllers\Book\BookLighlightController;
use App\Http\Controllers\Book\BookFountCoverController;
use App\Http\Controllers\User\UsersPermissionsController;
use App\Http\Controllers\Book\MatricsSummaryBookController;

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

Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    Artisan::call('optimize:clear');
    return 'clear done';
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'migrated successfully';
});


Route::get('/', function () {
    return view('auth.login');
})->name('home');


Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('user')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('passwordReset', [ProfileController::class, 'passwordReset'])->name('reset.password');

    Route::get('/', [UsersController::class, 'index'])->name('users');
    Route::get('/create', [UsersController::class, 'create'])->name('user.create');
    Route::get('edit/{id}', [UsersController::class, 'edit'])->name('user.edit');
    Route::put('update/{id}', [UsersController::class, 'update'])->name('user.update');
    Route::delete('delete/{id}', [UsersController::class, 'delete'])->name('user.delete');

    Route::post('/store', [UsersController::class, 'store'])->name('user.store');
    Route::get('/roles', [UsersRoleController::class, 'index'])->name('roles');
    Route::get('roles/edit/{id}', [UsersRoleController::class, 'edit'])->name('roles.edit');
    Route::put('roles/update/{id}', [UsersRoleController::class, 'update'])->name('roles.update');
    Route::get('permissions', [UsersPermissionsController::class, 'index'])->name('permissions');

    Route::prefix('book')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('book.index');
        Route::get('/share', [ShareBookController::class, 'index'])->name('book.share');
        Route::get('/preview', [PreviewBookController::class, 'index'])->name('book.preview');
        Route::get('/matrics_summary', [MatricsSummaryBookController::class, 'index'])->name('book.matrics_summary');
        Route::get('/highlights', [BookLighlightController::class, 'index'])->name('book.highlights');
        Route::get('/fount_cover', [BookFountCoverController::class, 'index'])->name('book.fount_cover');
        Route::get('/upload_covarage_file', [UploadeCoverageFile::class, 'index'])->name('book.upload_covarage_file');
        Route::get('/coverage', [CoverageController::class, 'index'])->name('book.coverage');
    });

});
