<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products_list',  [ProductController::class, 'index'])->middleware(['auth'])->name('products_list');

Route::resource('/products', ProductController::class)->middleware(['AdminAccess']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//Jei be administratoriaus bandoma naudotis CRUD, gaunama GIF
Route::get('/neradmino', function () {
    return view('neradmino');
})->middleware(['auth'])->name('neradmino');

Route::resource('/books', BookController::class)->middleware(['auth']);

require __DIR__.'/auth.php';

//laišku siuntimas
//Route::get('/mail',MailController::class);
Route::get('mail', [MailController::class, 'plain_email']);
Route::get('mail_html', [MailController::class, 'html_email']);
