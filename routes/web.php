<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\User\UsersController;
use App\Http\Controllers\Book\SectionController;
use App\Http\Controllers\Book\BackLinkController;
use App\Http\Controllers\Book\CoverageController;
use App\Http\Controllers\Book\ShareBookController;
use App\Http\Controllers\Book\UploadeCoverageFile;
use App\Http\Controllers\User\UsersRoleController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Book\BookMatricsController;
use App\Http\Controllers\Book\PreviewBookController;
use App\Http\Controllers\Book\BookLighlightController;
use App\Http\Controllers\Book\BookFrontCoverController;
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
    Route::get('archived/{id}', [HomeController::class, 'archived'])->name('archived'); //use
    Route::post('/filterBooks', [HomeController::class, 'filterBooks'])->name('filterBooks'); //use
    Route::get('/collectionBooks/{id}', [HomeController::class, 'collectionBooks'])->name('collectionBooks'); //use
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::post('/storeCollection', [HomeController::class, 'storeCollection'])->name('storeCollection'); //use
    Route::post('/storeBook', [HomeController::class, 'storeBook'])->name('storeBook'); // use
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
        Route::get('/{id?}', [BookController::class, 'index'])->name('book.index'); //use
        Route::post('/store_book_logo', [BookController::class, 'storeBookLogo'])->name('book.storeBookLogo'); //use
        Route::get('/delete_book_header_logo/{id?}', [BookController::class, 'deleteBookHeaderLogo'])->name('book.deleteBookHeaderLogo'); //use
        Route::post('/set_header_icon_color', [BookController::class, 'setHeaderIconColor'])->name('book.setHeaderIconColor'); //use
        Route::post('/add_new_slide_files', [BookController::class, 'addNewSlideFiles'])->name('book.addNewSlideFiles'); //use
        Route::post('/delete_files', [BookController::class, 'fileDestroy'])->name('book.fileDestroy'); //use
        Route::get('/edit_slide/{id?}/{bookId?}', [BookController::class, 'editSlide'])->name('book.editSlide'); //use
        Route::post('/update_slide', [BookController::class, 'updateSlide'])->name('book.updateSlide'); //use
        Route::post('/update_book_name', [BookController::class, 'updateBookName'])->name('book.updateBookName'); //use

        Route::post('/section/store', [SectionController::class, 'store'])->name('book.section.store'); //use
        Route::post('/update_status', [SectionController::class, 'updateStatus'])->name('book.section.updateStatus'); //use
        Route::get('/section/delete/{id?}', [SectionController::class, 'delete'])->name('book.section.delete'); //use
        Route::post('/section/update', [SectionController::class, 'update'])->name('book.section.update'); //use

        Route::get('/share/{id?}', [ShareBookController::class, 'index'])->name('book.share');
        Route::get('/preview/{id?}', [PreviewBookController::class, 'index'])->name('book.preview'); //use
        Route::get('/preview_section/{id?}/{sectionId?}', [PreviewBookController::class, 'bookSectionPreview'])->name('book.preview.section'); //use
        Route::get('/highlights/{id?}', [BookLighlightController::class, 'index'])->name('book.highlights'); //use

        Route::get('/matrics_summary/{id?}', [MatricsSummaryBookController::class, 'index'])->name('book.matrics_summary'); //use
        Route::post('/matrics_summary/store', [MatricsSummaryBookController::class, 'store'])->name('book.matrics_summary.store'); //use
        Route::post('/matrics_summary/store_custom_card', [MatricsSummaryBookController::class, 'storeCustomCard'])->name('book.matrics_summary.storeCustomCard'); //use
        Route::post('/matrics_summary/update_visibility', [MatricsSummaryBookController::class, 'updateVisibility'])->name('book.matrics_summary.updateVisibility'); //use


        Route::get('/front_cover/{id?}', [BookFrontCoverController::class, 'index'])->name('book.fount_cover'); //use
        Route::post('/front_cover/logo', [BookFrontCoverController::class, 'StoreLogoText'])->name('book.fount_cover.StoreLogoText'); //use
        Route::get('/front_cover/delete/{id?}', [BookFrontCoverController::class, 'deleteLogoImage'])->name('book.fount_cover.deleteLogoImage'); //use
        Route::post('/front_cover/cover_image', [BookFrontCoverController::class, 'storeCoverImage'])->name('book.fount_cover.storeCoverImage'); //use
        Route::post('/front_cover/bg', [BookFrontCoverController::class, 'backgroundColor'])->name('book.fount_cover.backgroundColor'); //use
        Route::post('/front_cover/bg', [BookFrontCoverController::class, 'backgroundColor'])->name('book.fount_cover.backgroundColor'); //use
        Route::post('/front_cover/store_layout', [BookFrontCoverController::class, 'storeLayout'])->name('book.fount_cover.storeLayout'); //use
        Route::post('/front_cover/status', [BookFrontCoverController::class, 'updateStatus'])->name('book.fount_cover.updateStatus'); //use

        Route::get('/upload_covarage_file/{id?}', [UploadeCoverageFile::class, 'index'])->name('book.upload_covarage_file');
        Route::get('/matrics', [BookMatricsController::class, 'index'])->name('book.matrics');

        Route::get('/coverage/{id?}/{sectionId?}', [CoverageController::class, 'index'])->name('book.coverage'); //use
        Route::post('/coverage/store_link', [CoverageController::class, 'storeLinks'])->name('book.coverage.storeLinks'); //use
        Route::post('/coverage/link/edit', [CoverageController::class, 'editLink'])->name('book.coverage.editLink'); //use
        Route::post('/coverage/link/update', [CoverageController::class, 'updataLink'])->name('book.coverage.updataLink'); //use
        Route::get('/coverage/link/delete/{id?}', [CoverageController::class, 'deleteLink'])->name('book.coverage.deleteLink'); //use
        Route::post('/coverage/store_layout', [CoverageController::class, 'storeLayout'])->name('book.coverage.storeLayout'); //use
        Route::post('/coverage/sort_by', [CoverageController::class, 'sortBy'])->name('book.coverage.sortBy'); //use
        Route::post('/coverage/updata_status', [CoverageController::class, 'updateStatus'])->name('book.coverage.updateStatus'); //use

        Route::get('/back_links/{id?}', [BackLinkController::class, 'index'])->name('book.backLink.index'); //use
        Route::get('/back_links/delete/{id?}', [BackLinkController::class, 'delete'])->name('book.backLink.delete'); //use
        Route::post('/back_links/store', [BackLinkController::class, 'store'])->name('book.backLink.store'); //use

    });
});
