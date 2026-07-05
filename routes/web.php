<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->prefix('tournaments')->group(function () {
    Route::get('/', [TournamentController::class, 'index'])->name('tournaments.index');
    Route::get('/create', [TournamentController::class, 'create'])->name('tournaments.create');
    Route::post('/', [TournamentController::class, 'store'])->name('tournaments.store');
    Route::get('/{id}', [TournamentController::class, 'show'])->name('tournaments.show');
    Route::get('/{id}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
});

Route::middleware('auth')->prefix('participants')->group(function () {
    Route::get('/explore', [ParticipantController::class, 'explore'])->name('participants.explore');
    Route::get('/my-tournaments', [ParticipantController::class, 'myTournaments'])->name('participants.my-tournaments');
    Route::post('/register', [ParticipantController::class, 'register'])->name('participants.register');
});

Route::middleware('auth')->prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/', [ProfileController::class, 'update'])->name('profile.update');
});
