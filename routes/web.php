<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::middleware('auth')->group(function () {

    Volt::route('/',dashboard::class)->name('dashboard');

    Route::prefix('bms')->name('bms.')->group(function(){
        Volt::route('/','bms.dashboard')->name('dashboard');
        Volt::route('chiller/{id}','bms.chillerdetail')->name('chiller');

    });
});

require __DIR__.'/auth.php';
