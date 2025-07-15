<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserResponseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'challenge_id' => 'required|exists:challenge,id',
            'flashcard_id' => 'required|exists:flashcard,id',
            'user_answer' => 'required|in:correct,wrong,skipped',
        ];
    }
}
