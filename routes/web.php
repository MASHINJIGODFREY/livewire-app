<?php

use Illuminate\Support\Facades\Route;

Route::get('/create', App\Livewire\CreateTodo::class);
Route::get('/', App\Livewire\TodoList::class);
