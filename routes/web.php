<?php

use App\Http\Controllers\Supervisor\DealerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Supervisors
Route::name('dealer.')->prefix('dealer')->group(function() {
    
    Route::get('/', [DealerController::class, 'index']);

    Route::get('/create', [DealerController::class, 'create']);
    
    Route::get('/{dealer}', [DealerController::class, 'show']);

    Route::get('/edit/{dealer}', [DealerController::class, 'edit']);

});