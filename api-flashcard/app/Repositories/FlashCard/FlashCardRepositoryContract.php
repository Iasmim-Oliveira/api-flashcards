<?php

namespace App\Repositories\FlashCard;

interface FlashCardRepositoryContract
{
    /**
     * Create FlashCard
     */
    public function create(array $data): void;

    /**
     * {@inheritDoc}
     */
    public function getRandomValues(int $quantity = 5);
}
