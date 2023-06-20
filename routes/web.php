<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnouncementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

Route::get('/',[MainController::class,'landingPage'])->name('landingPage');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');

// admin apnnelt

Route::get('admin', [AuthController::class, 'loginView'])->name('loginView');
Route::post('admin/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/admin/images', [MainController::class, 'listImages'])->name('listImages');
Route::get('admin/images/add', [MainController::class, 'addForm'])->name('addForm');
Route::post('admin/images/add', [MainController::class, 'add'])->name('add');
Route::post('admin/images/delete', [MainController::class, 'deletImgae'])->name('deletImgae');
Route::get('/admin/social-links/add', [MainController::class, 'socialLinksForm'])->name('socialLinksForm');
Route::post('/admin/social-links/add', [MainController::class, 'socialLinksAdd'])->name('socialLinksAdd');
Route::get('/admin/social-links', [MainController::class, 'socialLinksList'])->name('socialLinksList');
Route::post('/admin/social-links/delete', [MainController::class, 'socialLinkDelete'])->name('socialLinkDelete');

Route::get('/admin/anouncement', [AnouncementController::class, 'list'])->name('list');
Route::get('/admin/anouncement/add', [AnouncementController::class, 'addForm'])->name('addForm');
Route::post('/admin/anouncement/add', [AnouncementController::class, 'add'])->name('add');
Route::post('/admin/anouncememnt/delete', [AnouncementController::class, 'delete'])->name('delete');
