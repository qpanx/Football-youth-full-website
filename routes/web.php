<?php

use App\Models\Player;
use Illuminate\Support\Facades\Route;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(env('ASSET_PREFIX', '').'/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(env('ASSET_PREFIX', '').'/livewire/livewire.js', $handle);
});
/*
/ END
*/

Route::get('/', function () {
    return view('Main.Main');
})->name('main');

Route::get('/player/{id}', function ($player) {
    $player = Player::with('videos')->find($player);

    return view('Main.player', ['player' => $player]);
})->name('single-player');
