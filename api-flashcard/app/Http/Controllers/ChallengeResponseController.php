<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserResponse;
use Illuminate\Http\Request;

class ChallengeResponseController extends Controller
{
    public function __invoke(int $challengeId)
    {
        $responses = UserResponse::with('flashcard')
            ->where('challenge_id', $challengeId)
            ->get();

        $result = $responses->map(function ($response) {
            return [
                'flashcard_id' => $response->flashcard->id,
                'term' => $response->flashcard->term,
                'definition' => $response->flashcard->definition,
                'user_answer' => $response->user_answer,
                'is_correct' => $response->is_correct,
            ];
        });

        return response()->json([
            'challenge_id' => $challengeId,
            'responses' => $result,
        ]);
    }
}
