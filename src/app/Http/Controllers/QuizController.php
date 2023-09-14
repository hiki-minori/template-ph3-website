<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizzes;
use App\Models\Questions;
use App\Models\Choices;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quizzes::all();
        return view('quizzes/index', compact('quizzes'));
    }
}
