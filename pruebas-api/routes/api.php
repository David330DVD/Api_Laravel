<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

Route::post('/tasks/add', [TareaController::class, 'store']);
Route::get('/tasks', [TareaController::class, 'index']);
