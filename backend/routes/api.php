<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'API Metal Werk jalan']);
});

Route::get('/motor', function () {
    return response()->json([
        ['nama' => 'Chopper Custom', 'harga' => 50000000],
        ['nama' => 'Bobber Style', 'harga' => 45000000],
    ]);
});