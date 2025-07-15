<?php

namespace App\Http\Controllers\UserResponse;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserResponseRequest;
use App\Models\UserResponse;
use Illuminate\Http\Request;

class UserResponseController extends Controller
{
    public function __invoke(StoreUserResponseRequest $request)
    {
        try {
            $validated = $request->validated();

            $isCorrect = match ($validated['user_answer']) {
                'correct' => true,
                'wrong' => false,
                'skipped' => null,
            };

            $response = UserResponse::create([
                'challenge_id' => $validated['challenge_id'],
                'flashcard_id' => $validated['flashcard_id'],
                'user_answer' => $validated['user_answer'],
                'is_correct' => $isCorrect,
            ]);

            return response()->json([
                'message' => 'Resposta salva com sucesso.',
                'data' => $response,
            ], 201);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
