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


    /**
     * クイズカテゴリ選択
     */
    public function selectedCategory($quizNum)
    {
        
        $quiz = Quizzes::with('questions.choices')->find($quizNum);
        return view('quizzes/question', compact('quiz'));
    }

        /**
     * 問題文編集
     */
    public function edit($questionNum)
    {
        $question = Questions::find($questionNum);
        return view('quizzes/edit', compact('question'));
    }

    /**
     * 問題文編集完了
     */
    public function update(Request $request)
    {
        $question = Questions::find($request->question_id);
        $question->text = $request->text;
        $question->save();

        session()->flash('message', '編集が完了しました！');
        return redirect()->route('quizzes.selectedCategory', ['quizNum' => $question->quiz_id]);
    }

}

