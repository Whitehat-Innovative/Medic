<?php

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
});

Route::get('/dashboard', function ()

 {

    if (Auth::user()->code=='007') {
        return view('dashboard');
    }
    if (Auth::user()->code=='008') {
        return view ('staff-dashboard');
    }
    if(Auth::user()->code =='009')
    {
        return view('user-dashboard');
    }

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
