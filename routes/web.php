<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ShowExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomepageController::class)->name('home');
Route::get('/experiences',[ShowExperienceController::class,'experiences'])->name('experiences');
Route::get('/project/{id}/{company}',[ProjectController::class,'show'])->name('project.show');
