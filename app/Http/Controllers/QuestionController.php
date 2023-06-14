<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Closure;
use Illuminate\Http\RedirectResponse;

class QuestionController extends Controller
{
    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'question' => [
                'required',
                'min:10',
                function (string $attribute, mixed $value, Closure $fail) {
                    if (!str_ends_with($value, '?')) {
                        $fail("Are you sure that is a question? It is missing the question mark in the end.");
                    }
                }, ],
        ]);

        Question::query()->create($attributes);

        return to_route('dashboard');
    }
}
