<?php

declare(strict_types=1);

use App\Livewire\About;
use App\Livewire\ArticleDetail;
use App\Livewire\Articles;
use App\Livewire\Home;
use App\Livewire\Projects;
use App\Livewire\Uses;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/articles', Articles::class)->name('articles');
Route::get('/articles/{slug}', ArticleDetail::class)->name('article');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/uses', Uses::class)->name('uses');
