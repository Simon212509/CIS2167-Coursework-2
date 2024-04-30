<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionaire;

class QuestionaireController extends Controller
{
    public function create()
    {
        return view('questionaire.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|in:1,2,3,4',
        ]);

        // Process the answers here (e.g., compare with correct answers)
        // For now, we'll just return the answers back to the user

        return view('questionaire.results', ['answers' => $data['answers']]);
    }
}
