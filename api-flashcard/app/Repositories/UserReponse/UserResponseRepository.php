<?php

namespace App\Repositories\UserReponse;

use App\Models\UserResponse;

class UserResponseRepository implements UserResponseRepositoryContract
{
    public function __construct(
        protected UserResponse $userResponse
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function create(array $data): void
    {
        $this->userResponse->create([
            'challenge_id' => $data['challenge_id'],
            'flashcard_id' => $data['flashcard_id'],
            'user_answer' => $data['user_answer'],
            'is_correct' => $data['is_correct'],
        ]);
    }
}
