<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('users/welcome');
// });

Route::get('/test');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {

    if (Auth::user()->code=='007') {
        return view('admins/dashboard');
    }
    if (Auth::user()->code=='008') {
        return view ('staff-dashboard');
    }
    if(Auth::user()->code =='009')
    {
        return view('patient');
    }

})->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');


Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/single_blog/{blog}', [HomeController::class, 'single_blog'])->name('single_blog');

Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/single_project', [HomeController::class, 'single_project'])->name('single_project');

Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');

Route::post('/make_appointment', [AppointmentController::class, 'appointment'])->name('make.appointment');


Route::prefix('admin')->middleware(['auth','admin'])->group(function () {

    /*Blogs Route  */
    Route::get('/addpost/view', [PostController::class,'blog'])->name('blog.view');
    Route::get('/editpost/{blog}/view', [PostC65ontroller::class, 'editpostview'])->name('blog.edit.view');

    Route::post('/addpost', [PostController::class,'addpost'])->name('blog.add');
    Route::post('/editpost/{blog}', [PostController::class, 'editpost'])->name('blog.edit');

    Route::post('/deletepost/{}', [PostController::class, 'destroypost'])->name('blog.delete');

    Route::get('/postlist', [PostController::class, 'allpost'])->name('all.blog');
    Route::get('/cat/blog/{category}', [PostController::class, 'cat_blog'])->name('cat.blog');
    


    /* Research/Blog route */
    Route::get('/addresearch/view', [PostController::class,'research'])->name('research');
    Route::get('/editresearch/{}/view', [PostController::class, 'editresearchview'])->name('research.edit.view');

    Route::post('/addresearch', [PostController::class,'addresearch'])->name('research.add');
    Route::post('/editresearch', [PostController::class, 'editresearch'])->name('research.edit');
    Route::post('/deleteresearch/{}', [PostController::class, 'destroyresearch'])->name('research.delete');

    Route::get('/researchlist', [PostController::class, 'allresearch'])->name('research.list');
    Route::get('/bloglist', [PostController::class, 'allblog'])->name('blog.list');

    /* All Users Route */
    Route::get('/allusers', [UserController::class, 'allusers'])->name('view.user');

    Route::post('/delete/{users}', [UserController::class, 'destroy'])->name('delete');
    Route::get('/edit/{users}/view', [UserController::class, 'edituserview'])->name('edit.view');
    Route::post('/edit/{users}', [UserController::class, 'edit'])->name('edit.user');

    /* Category/Tags */

    Route::get('/cat-tag', [PostController::class, 'cat'])->name('cat.tag.view');
    Route::post('/add/cat-tag', [PostController::class, 'addCat'])->name('cat.tag.add');

    /* Send a Message  */




});

require __DIR__.'/auth.php';
