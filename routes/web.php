<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\AdminSubscriberController;

// Subscribe 

Route::get('/', [SubscriberController::class, 'subscriber_form'])->name('form');
Route::post('/subscriber', [SubscriberController::class, 'index'])->name('subscribe');
Route::get('/subscriber/verify/{token}/{email}', [SubscriberController::class, 'verify'])->name('subscriber_verify');

// Message to All Subscriber

Route::get('/subscriber/all', [AdminSubscriberController::class, 'show_all'])->name('admin_subscribers');
Route::get('/subscriber/send-email', [AdminSubscriberController::class, 'send_email'])->name('subscriber_send_email');
Route::post('/admin/subscriber/send-email-submit', [AdminSubscriberController::class, 'send_email_submit'])->name('subscriber_send_email_submit');


// Blog Post

Route::get('/blog/post/show',[BlogController::class,'blog_index'])->name('blog_index');
Route::get('/create',[BlogController::class,'create'])->name('create');
Route::post('/store',[BlogController::class,'store'])->name('store');
Route::get('edit/{id}', [BlogController::class,'edit'])->name('edit');
Route::post('update/{id}',[BlogController::class,'update'])->name('update');
Route::get('delete/{id}',[BlogController::class,'delete'])->name('delete');
Route::get('/blog-detail/{id}', [BlogController::class, 'detail'])->name('blog_detail');