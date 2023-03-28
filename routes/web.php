<?php

use App\Http\Livewire\Index;
use App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class);
Route::get('{name}', Profile::class);
