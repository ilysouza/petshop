<?php

use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Login;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::get('/dashboard', Dashboard::class)->name('dashboard');