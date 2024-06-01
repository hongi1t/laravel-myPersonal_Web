<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personal', [PageController::class, 'welcome']);
Route::get('/projects', [ProjectController::class, 'index']);