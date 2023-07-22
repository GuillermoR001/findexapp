<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\OnboardingStepsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OnboardingStepsController extends Controller
{
    private readonly OnboardingStepsService $stepsService;

    public function __construct(OnboardingStepsService $stepsService) {
        $this->stepsService = $stepsService;
    }

    /**
     * Messages to display in the onboarding steps form
     *
     * @return JsonResponse
     */
    public function onboardingSteps() : JsonResponse
    {
        $steps =  $this->stepsService->getSteps();

        return response()->json(['steps' => $steps], 200);
    }
}
