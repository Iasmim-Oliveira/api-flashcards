<?php

namespace App\Services\Challenge;

use App\Models\Flashcard;
use App\Repositories\Challenge\ChallengeRepositoryContract;
use App\Repositories\FlashCard\FlashCardRepository;

class ChallengeService implements ChallengeServiceContract
{
    public function __construct(
        protected ChallengeRepositoryContract $challengeRepository,
        protected FlashCardRepository $flashCardRepository,
    ) {
    }

    public function store()
    {
        $flashCards = $this->flashCardRepository->getRandomValues();

        $ids = array_map(fn (array $flashCard) => $flashCard['id'], $flashCards->toArray());

        $challenge = $this->challengeRepository->store($ids);

        return [
            'challenge' => $challenge,
            'flashcards' => $flashCards,
        ];
    }
}
