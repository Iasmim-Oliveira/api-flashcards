<?php

use App\Http\Controllers\Api\V1\RestaurantSearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/restaurants/search-by-location', [RestaurantSearchController::class, 'searchByLocation']);
});