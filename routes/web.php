<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');


Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/single_blog', [HomeController::class, 'single_blog'])->name('single_blog');

Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/single_project', [HomeController::class, 'single_project'])->name('single_project');

Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');

Route::post('/make_appointment', [AppointmentController::class, 'appointment'])->name('make.appointment');


require __DIR__.'/auth.php';
