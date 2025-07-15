<?php

namespace App\Http\Controllers\Challenge;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChallengeResource;
use App\Models\Flashcard;
use App\Services\Challenge\ChallengeServiceContract;
use Illuminate\Http\Request;

class CreateChallengeController extends Controller
{
    public function __construct(
      protected ChallengeServiceContract $challengeService,
    ) {
    }

    public function __invoke(Request $request)
    {
        try {
            $data = $this->challengeService->store();

            return response()->json(ChallengeResource::make($data));
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
