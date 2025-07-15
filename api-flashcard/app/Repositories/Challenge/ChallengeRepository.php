<?php

namespace App\Repositories\Challenge;

use App\Models\Challenge;
use App\Models\ChallengeFlashcard;

class ChallengeRepository implements ChallengeRepositoryContract
{
    public function __construct(
        protected Challenge $challenge,
        protected ChallengeFlashcard $challengeFlashcard
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function store(array $dataFlashCardId): Challenge
    {
        $challengeEntity = $this->challenge->create();

        $challengeEntity->flashcards()->attach($dataFlashCardId);

        return $challengeEntity;
    }
}
