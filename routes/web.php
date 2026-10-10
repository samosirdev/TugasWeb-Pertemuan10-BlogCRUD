<?php

use App\Http\Controllers\PostController;

Route::get('/', fn () => redirect()->route('posts.index'));
Route::resource('posts', PostController::class);
