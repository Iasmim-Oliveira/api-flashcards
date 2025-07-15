<?php

use App\Http\Controllers\Challenge\CreateChallengeController;
use App\Http\Controllers\UserResponse\UserResponseController;
use App\Http\Controllers\ChallengeResponseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/challenge/store', CreateChallengeController::class)->name('challenge.store');
    Route::post('/user-response', UserResponseController::class)->name('response.store');
    Route::get('/challenge/{id}/responses', ChallengeResponseController::class)->name('response.get');
});
