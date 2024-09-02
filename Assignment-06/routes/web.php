<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/',[PortfolioController::class, 'index']);
Route::get('/work-experiences',[PortfolioController::class, 'workExperinces']);
Route::get('/projects',[PortfolioController::class, 'projects']);
Route::get('/projects/{project}',[PortfolioController::class,'project']);
