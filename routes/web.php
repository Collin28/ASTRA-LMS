<?php

use App\Http\Controllers\Supervisor\DealerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Supervisors
Route::name('dealer.')->prefix('dealer')->group(function() {
    
    Route::get('/', [DealerController::class, 'index'])->name('index');

    Route::get('/create', [DealerController::class, 'create'])->name('create');
    
    Route::get('/{dealer}', [DealerController::class, 'show'])->name('show');

    Route::get('/edit/{dealer}', [DealerController::class, 'edit'])->name('edit');

    Route::post('/', [DealerController::class, 'store'])->name('store');

    Route::put('/{dealer}', [DealerController::class, 'update'])->name('update');

    Route::delete('/{dealer}', [DealerController::class, 'destroy'])->name('destroy');

});