<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserResponse extends Model
{
    protected $table = 'user_response';

    protected $fillable = ['flashcard_id', 'challenge_id', 'user_answer', 'is_correct'];

    protected $casts = [
        'is_correct' => 'boolean',
    ];

    public function flashcard()
    {
        return $this->belongsTo(Flashcard::class);
    }
}
