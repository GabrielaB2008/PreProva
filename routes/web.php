<?php

use App\Livewire\Auth\Login;
use App\Livewire\Categorias\CategoriaCreate;
use App\Livewire\Categorias\CategoriaEdit;
use App\Livewire\Categorias\CategoriaIndex;
use Illuminate\Support\Facades\Route;

Route::get('/categoria/create', CategoriaCreate::class)->name('categoria.create');
Route::get('/categoria/edit/{id}', CategoriaEdit::class)->name('categoria.edit');
Route::get('/categoria', CategoriaIndex::class)->name('categoria.index');

Route::get('/login', Login::class)->name('login');