<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home/index');
})->name('home');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/{quizNum}', [QuizController::class, 'selectedCategory'])->name('quizzes.selectedCategory');
Route::get('/quizzes/edit/{questionNum}', [QuizController::class, 'edit'])->name('question.edit');
Route::post('/quizzes/update/', [QuizController::class, 'update'])->name('question.update');
Route::post('/quizzes/delete/{quizNum}', [QuizController::class, 'delete'])->name('quiz.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
