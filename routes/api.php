<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;

// Um usuário, inicialmente, tem um endereço.
Route::get('/users', [UserController::class, 'index']);

// Buscar por um usuário pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Criar um novo usuário
Route::post('/users', [UserController::class, 'insert']);


Route::get('/addresses', [AddressController::class, 'index']);

// Buscar por um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

// Criar um novo endereço
Route::post('/addresses', [AddressController::class, 'insert']);

Route::get('/invoices', [InvoiceController::class, 'index']);

// Criar uma nova invoice
Route::post('/invoices', [InvoiceController::class, 'insert']);
