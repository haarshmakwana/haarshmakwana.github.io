<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Front Controller
Route::get('/', [HomeController::class, 'home'])->name('front.home');
Route::post('contact-me/store', [HomeController::class, 'store'])->name('contactMe.store');


// Admin Controller
Route::get('/admin/contact-me', [AdminController::class, 'contactMe'])->name('admin.contactMe');