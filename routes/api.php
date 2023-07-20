<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CocktailController;

Route::get('cocktails', [CocktailController::class, 'index'])->name('api.cocktails.index');
