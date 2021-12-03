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
});
