<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PerroController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', [LoginController::class, 'mostrarLogin'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registro', [PerroController::class, 'create'])->name('registro');
Route::post('/registro', [PerroController::class, 'store']);

Route::get('/parejas', [PerroController::class, 'index'])->middleware('auth')->name('parejas');
Route::get('/foto/{id}', [PerroController::class, 'foto'])->middleware('auth')->name('foto');