<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', 
     [ProductsController::class,'index']
);
Route::get('/create', 
     [ProductsController::class,'create']
);
Route::post('/create', 
     [ProductsController::class,'store']
);
Route::get('//{id}/edit', 
     [ProductsController::class,'edit']
);
Route::put('//{id}', 
     [ProductsController::class,'update']
);
Route::delete('//{id}', 
     [ProductsController::class,'destroy']
);