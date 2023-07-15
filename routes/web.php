<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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


Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/set-lang/{lang}', [UserController::class, 'set_lang'])->name('set_lang');
Route::get('/read-news/{id}', [UserController::class, 'read_news'])->name('read_news');



Route::view('/admin','admin.login')->name('admin_login');
Route::post('/admin-auth', [AdminController::class, 'auth'])->name('admin_auth');


Route::middleware(['AdminAuth'])->group(function () {
    Route::get('admin-home', [AdminController::class, 'home'])->name('admin_home');
    Route::get('admin-logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('edit_text/{id}', [AdminController::class, 'edit_text'])->name('edit_text');
    Route::post('admin-update_text', [AdminController::class, 'update_text'])->name('update_text');
    Route::post('admin-new_text', [AdminController::class, 'new_text'])->name('new_text');

    Route::get('admin-news', [AdminController::class, 'news'])->name('admin_news');
    Route::post('admin-add-news', [AdminController::class, 'add_news'])->name('add_news');
    Route::get('admin-news-edit/{id}', [AdminController::class, 'news_edit'])->name('news_edit');
    Route::post('admin-edit-update_news', [AdminController::class, 'update_news'])->name('update_news');

    Route::get('admin-photos', [AdminController::class, 'photos'])->name('admin_photos');
    Route::post('admin-add-photo', [AdminController::class, 'new_photo'])->name('new_photo');
    Route::post('admin-edit-photo', [AdminController::class, 'update_photo'])->name('update_photo');


    Route::get('admin-v', [AdminController::class, 'partners'])->name('partners');
    Route::post('admin-add-partners', [AdminController::class, 'new_partner'])->name('new_partner');
    Route::post('admin-edit-partners', [AdminController::class, 'update_partner'])->name('update_partner');

});
