<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('landing'));
Route::get('/jawatankuasa', fn () => view('jawatan'))->name('jawatankuasa');
Route::get('/budiman-biz-hub', fn () => view('biz-hub'))->name('biz-hub');
Route::get('/aktivity', fn () => view('aktivity'))->name('aktivity');
