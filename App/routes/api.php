<?php

use App\Http\Controllers\DatabaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('transaction', [DatabaseController::class, "pepper"]);
