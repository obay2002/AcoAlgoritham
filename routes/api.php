<?php

use Illuminate\Support\Facades\Route;

// Route::get('/api/test-web', function () {
//     return response()->json(['message' => 'api route is working']);
// });

Route::middleware('api')->get('/api/test-web', function () {
    return response()->json(['message' => 'api route is working']);
});
