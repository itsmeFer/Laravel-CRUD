<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsApiController;

Route::get('/', 
     [ProductsApiController::class,'index']
);
Route::get('/create', 
     [ProductsApiController::class,'create']
);
Route::post('/create', 
     [ProductsApiController::class,'store']
);
Route::get('//{id}/edit', 
     [ProductsApiController::class,'edit']
);
Route::put('//{id}', 
     [ProductsApiController::class,'update']
);
Route::delete('//{id}', 
     [ProductsApiController::class,'destroy']
);