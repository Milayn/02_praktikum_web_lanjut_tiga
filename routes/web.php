<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('products')->group(function () {
    Route::get('/edu-games', [ProductsController::class, 'eduGames']);
    Route::get('/kids-games', [ProductsController::class, 'kidsGames']);
    Route::get('/story-books', [ProductsController::class, 'storyBooks']);
    Route::get('/kids-songs', [ProductsController::class, 'kidSongs']);
});

Route::get('/news/{title}', function ($title) {
    return redirect("https://www.educastudio.com/news/" . $title);
});

Route::prefix('products')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

Route::get('/about-us', [AboutUsController::class, 'about']);

Route::resource('/contact-us', ContactUsController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('news/{slug}', function($slug=''){
//     return "ini adalah halaman berita $slug";
// });

