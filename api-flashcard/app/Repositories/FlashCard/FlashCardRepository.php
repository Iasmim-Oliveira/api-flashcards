<?php

declare(strict_types=1);

namespace App\Repositories\FlashCard;


use App\Models\Flashcard;
use Dotenv\Repository\RepositoryInterface;

class FlashCardRepository implements FlashCardRepositoryContract
{
    public function __construct(
        protected FlashCard $flashCard
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function create(array $data): void
    {
        $this->flashCard->create([
            'term' => $data['term'],
            'definition' => $data['definition'],
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function getRandomValues(int $quantity = 5)
    {
        return Flashcard::inRandomOrder()->take($quantity)->get();
    }
}
