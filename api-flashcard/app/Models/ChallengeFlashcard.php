<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChallengeFlashcard extends Model
{
    protected $table = 'challenge_flashcard';

    protected $fillable = ['challenge_id', 'flashcard_id'];
}
