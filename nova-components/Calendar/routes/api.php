<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
*/

// Route::get('/endpoint', function (Request $request) {
//     //
// });
Route::get('/events', function(Request $request) {
    $events = \App\Models\Event::select('title', 'start_date as date')->get();

    return response()->json([
        'events' => $events
    ], 200);
});