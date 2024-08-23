<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

// Um usuário, inicialmente, tem um endereço.
Route::get('/users', [UserController::class, 'index']);


Route::get('/addresses', [AddressController::class, 'index']);