<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChallengeFlashcard extends Model
{
    protected $table = 'challenge_flashcard';

    protected $fillable = ['challenge_id', 'flashcard_id'];

    public function flashcards(): BelongsTo
    {
        return $this->belongsTo(Flashcard::class, 'flashcard_id');
    }
}
