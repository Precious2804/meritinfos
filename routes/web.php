<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/do_contact', [MainController::class, 'do_contact'])->name('do_contact');
Route::get('/syslogin', [AdminController::class, 'syslogin'])->name('syslogin');
Route::post('/do_login', [AdminController::class, 'do_login'])->name('do_login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin.dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('admin.admin_services', [AdminController::class, 'admin_services'])->name('admin_services');
    Route::get('admin.admin_portfolio', [AdminController::class, 'admin_portfolio'])->name('admin_portfolio');
    Route::get('admin.admin_team', [AdminController::class, 'admin_team'])->name('admin_team');
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('admin.edit_port', [AdminController::class, 'edit_port'])->name('edit_port');
    Route::get('admin.edit_service', [AdminController::class, 'edit_service'])->name('edit_service');
    Route::get('admin.edit_team', [AdminController::class, 'edit_team'])->name('edit_team');
    Route::post('/upload_portfolio', [AdminController::class, 'upload_portfolio'])->name('upload_portfolio');
    Route::post('/upload_service', [AdminController::class, 'upload_service'])->name('upload_service');
    Route::post('/upload_team', [AdminController::class, 'upload_team'])->name('upload_team');
    Route::post('/do_edit_port', [AdminController::class, 'do_edit_port'])->name('do_edit_port');
    Route::post('/do_edit_service', [AdminController::class, 'do_edit_service'])->name('do_edit_service');
    Route::post('/do_edit_team', [AdminController::class, 'do_edit_team'])->name('do_edit_team');
    Route::get('/delete_service', [AdminController::class, 'delete_service'])->name('delete_service');
    Route::get('/delete_team', [AdminController::class, 'delete_team'])->name('delete_team');
});
