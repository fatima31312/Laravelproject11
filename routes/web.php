<?php

use App\Http\Controllers\WelocomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelocomeController::class, 'welcome'])->name('welcome');
