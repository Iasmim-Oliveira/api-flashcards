<?php

namespace App\Repositories\Challenge;

use App\Models\Challenge;

interface ChallengeRepositoryContract
{
    /**
     * Generate challenge flashcard
     */
    public function store(array $dataFlashCardId): Challenge;
}
