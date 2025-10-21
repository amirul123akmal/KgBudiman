<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('landing'));
Route::get('/jawatankuasa', fn () => view('jawatan'))->name('jawatankuasa');
