<?php

use public\css;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogoController;


Route::get('/', [JogoController::class, 'index']);
Route::get('/jogo/create', [JogoController::class, 'create'])->middleware('auth');
Route::get('/jogo/{id}', [JogoController::class, 'show']);
Route::post('/jogo', [JogoController::class, 'store']);
Route::delete('jogo/{id}',[JogoController::class, 'destroy'])->middleware('auth');
Route::delete('jogo/edit/{id}',[JogoController::class, 'edit'])->middleware('auth');
Route::delete('jogo/update/{id}',[JogoController::class, 'update'])->middleware('auth');


// Route::get('/', function(){return view('welcome');});

Route::get('/jogo', function () {

    $busca = request('search');

    return view('jogo', ['busca' => $busca]);});

Route::get('/jogos/{id}', function ($id = null) {
    return view('/jogos', ['id'=>$id]);});

    Route::get('/dashboard',[PostController::class, 'dashboard'])-> middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
