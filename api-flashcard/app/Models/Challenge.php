<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Challenge extends Model
{
    protected $table = 'challenge';

    protected $fillable = [];

    public function flashcards(): BelongsToMany
    {
        return $this->belongsToMany(Flashcard::class, 'challenge_flashcard');
    }
}
