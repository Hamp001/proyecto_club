<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
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
// ruta de inicio que lleva al login 
Route::get('/', function () {
    return view('login');
});
// ruta de registro
Route::get('/registro', [RegistroController::class, 'index'])->name('registro');

// php artisan cache:clear    
// php artisan route:cache  
// php artisan config:cache
// php artisan view:clear
// php artisan optimize:clear