<?php

use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Donation;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
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

    // Alert::info('Warning Title', "Success Message","info");


    $pa= Patient::all();
    $p= Patient::paginate(5);
    $a=Appointment::latest()->paginate(3);
    $d=Donation::all();
    $b=Blog::all();


    if (Auth::user()->code=='007') {
        return view('admins/dashboard', ['p'=>$p, 'pa'=>$pa, 'a'=>$a, 'd'=>$d, 'b'=>$b]);
    }
    if (Auth::user()->code=='008') {
        return view ('staff-dashboard', ['p'=>$p, 'a'=>$a, 'd'=>$d, 'b'=>$b]);
    }
    if(Auth::user()->code =='009')
    {
        return view('patient', ['p'=>$p, 'a'=>$a, 'd'=>$d, 'b'=>$b]);
    }

})->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/make_contact', [HomeController::class, 'make_contact'])->name('make.contact');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');

Route::post('/make_testimonial', [HomeController::class, 'make_testimonial'])->name('make.testimonial');



Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/{blog}/single_blog', [HomeController::class, 'single_blog'])->name('single_blog');
Route::post('/addcomment', [PostController::class, 'addcomment'])->name('add.comment');
Route::post('/addreply/{comment}', [PostController::class, 'addreply'])->name('add.reply');


Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
// Route::get('/single_project', [HomeController::class, 'single_project'])->name('single_project');

Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');


// Route::get('/pay', function () {

//     return view('users.pay');

// });
Route::get('/pay', [HomeController::class, 'pay'])->name('pay');

Route::post('/make_appointment', [AppointmentController::class, 'appointment'])->name('make.appointment');


Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
// 

    Route::get('/allappointments', [AppointmentController::class,'allappointment'])->name('all.appointment');
    Route::get('/single_appointment/{a}/view', [AppointmentController::class,'singleappointment'])->name('single.appointment');
    Route::get('/deleteappointment/{a}', [AppointmentController::class,'deleteappointment'])->name('delete.appointment');

    /*Blogs Route  */
    Route::get('/addpost/view', [PostController::class,'blog'])->name('blog.view');
    Route::get('/editpost/{blog}/view', [PostController::class, 'editpostview'])->name('blog.edit.view');

    Route::post('/addpost', [PostController::class,'addpost'])->name('blog.add');
    Route::post('/editpost/{blog}', [PostController::class, 'editpost'])->name('blog.edit');

    Route::get('/deletepost/{blog}', [PostController::class, 'deleteblog'])->name('blog.delete');

    Route::get('/postlist', [PostController::class, 'allpost'])->name('all.blog');
    Route::get('/cat/blog/{category}', [PostController::class, 'cat_blog'])->name('cat.blog');
    Route::get('/singleblog/{blog}', [PostController::class, 'singleblog'])->name('single.blog.view');
    Route::get('/bloglist', [PostController::class, 'allblog'])->name('blog.list');

    /*Comment And Replies  */
    Route::get('/allcomment', [PostController::class, 'allcomment'])->name('all.comment');
    Route::post('/editcomment/{c}', [PostController::class, 'editcomment'])->name('comment.edit.approve');
    Route::post('/approvecomment/{c}', [PostController::class, 'approvecomment'])->name('comment.approve');
    Route::get('/editcomment/{c}/view', [PostController::class, 'editcommentview'])->name('comment.edit.view');
    Route::get('/deletecomment/{c}', [PostController::class, 'deletecomment'])->name('comment.delete');


    /* Research/Blog route */
    Route::get('/addresearch/view', [PostController::class,'research'])->name('research');
    Route::get('/editresearch/{}/view', [PostController::class, 'editresearchview'])->name('research.edit.view');

    Route::post('/addresearch', [PostController::class,'addresearch'])->name('research.add');
    Route::post('/editresearch', [PostController::class, 'editresearch'])->name('research.edit');
    Route::get('/deleteresearch/{re}', [PostController::class, 'destroyresearch'])->name('delete.research');

    Route::get('/researchlist', [PostController::class, 'allresearch'])->name('research.list');
    Route::get('/singleresearch/{re}', [PostController::class, 'singleresearch'])->name('single.research');
    Route::post('/searchblog', [PostController::class, 'search'])->name('search.blog');

    /* All Users Route */
    Route::get('/allusers', [UserController::class, 'allusers'])->name('view.user');


    Route::get('/addpatient/view', [UserController::class, 'addpatient'])->name('add.patient');
    Route::post('/addpatient', [UserController::class, 'makepatient'])->name('make.patient');

    Route::get('/allpatient', [UserController::class, 'allpatient'])->name('all.patients');
    Route::get('/singlepatient/{patient}', [UserController::class, 'singlepatient'])->name('single.patient.view');
    Route::post('/search', [UserController::class, 'search'])->name('search');


    Route::get('/editpatient/{patient}/view', [UserController::class, 'editpatientview'])->name('edit.patient.view');
    Route::post('/editpatient/{patient}', [UserController::class, 'editpatient'])->name('edit.patient');
    Route::get('/deletepatient/{patient}', [UserController::class, 'deletepatient'])->name('delete.patient');

    Route::get('/deletedonation/{donation}', [UserController::class, 'deletedonation'])->name('delete.donation');
    Route::get('/alldonation', [UserController::class, 'alldonation'])->name('all.donation');



    Route::get('/delete/{users}', [UserController::class, 'destroy'])->name('delete');
    Route::get('/edit/{users}/view', [UserController::class, 'edituserview'])->name('edit.view');
    Route::post('/edit/{users}', [UserController::class, 'edit'])->name('edit.user');

    /* Category/Tags */
    Route::get('/cat-tag', [PostController::class, 'cat'])->name('cat.tag.view');
    Route::post('/add/cat-tag', [PostController::class, 'addCat'])->name('cat.tag.add');

    /* Send a Message  */


});

    Route::post('/payFor', [DonationController::class, 'fund'])->name('fund');

    Route::get('/payment/callback', [DonationController::class, 'fundCallback'])->name('transaction.callback');

require __DIR__.'/auth.php';
