<?php

use App\Livewire\Counter;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/counter', Counter::class);
