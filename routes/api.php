<?php

use App\Http\Controllers\Api\OnboardingStepsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/onboarding-steps', [OnboardingStepsController::class, 'onboardingSteps']);
Route::get('/calendar-events', function(Request $request) {
    $events = \App\Models\Event::select('title', 'start_date as date')->get();

    return response()->json([
        'events' => $events
    ], 200);
});
