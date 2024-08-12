<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Team;
use App\Http\Controllers\TeamController;
use App\Models\Player;
use App\Http\Controllers\PlayerController;


//PUBLIC VIEWS
Route::get('/', function () {
    $players = Player::with('team')->get();
    return view('welcome',['players' => $players]);
});

Route::get('/public/teams', function () {
    return view('public.teams',['teams' => Team::all()]);
});

//PLAYERS
Route::get(
    'players/trash/{id}',
    [PlayerController::class, 'trash']
    )->name('players.trash')->middleware(['auth', 'verified']);
Route::get(
    'players/trashed/',
    [PlayerController::class, 'trashed']
    )->name('players.trashed')->middleware(['auth', 'verified']);
Route::get(
    'players/restore/{id}',
    [PlayerController::class, 'trash']
    )->name('players.restore')->middleware(['auth', 'verified']);

Route::resource('players', PlayerController::class)->middleware(['auth', 'verified']);

//TEAMS
Route::get(
    'teams/trash/{id}',
    [TeamController::class, 'trash']
    )->name('teams.trash')->middleware(['auth', 'verified']);
Route::get(
    'teams/trashed/',
    [TeamController::class, 'trashed']
    )->name('teams.trashed')->middleware(['auth', 'verified']);
Route::get(
    'teams/restore/{id}',
    [TeamController::class, 'trash']
    )->name('teams.restore')->middleware(['auth', 'verified']);

Route::resource('teams', TeamController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




