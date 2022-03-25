<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/books', BookController::class)->middleware(['auth']);

require __DIR__.'/auth.php';

//laišku siuntimas
//Route::get('/mail',MailController::class);
Route::get('mail', [MailController::class, 'plain_email']);
Route::get('mail_html', [MailController::class, 'html_email']);
