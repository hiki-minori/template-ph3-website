<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Quizzes;
use App\Models\Questions;
use App\Models\Choices;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // quizテーブルのレコードを作成
        Quizzes::create([
            'id' => 1,
            'name' => 'ITクイズ',
        ]);

        Quizzes::create([
            'id' => 2,
            'name' => '紹介クイズ',
        ]);
        
        // questionテーブルのレコードを作成
        Questions::create([
            'id' => 1,
            'image' => '',
            'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
            'supplement' => '',
            'quiz_id' => 1,
        ]);

        Questions::create([
            'id' => 2,
            'image' => '',
            'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
            'supplement' => '',
            'quiz_id' => 1,
        ]);

        Questions::create([
            'id' => 3,
            'image' => '',
            'text' => 'IoTとは何の略でしょう',
            'supplement' => '',
            'quiz_id' => 1,
        ]);

        Questions::create([
            'id' => 4,
            'image' => '',
            'text' => '出身地はどこでしょう？',
            'supplement' => '',
            'quiz_id' => 2,
        ]);

        Questions::create([
            'id' => 5,
            'image' => '',
            'text' => '在籍中の大学はどこでしょう？',
            'supplement' => '',
            'quiz_id' => 2,
        ]);

        Questions::create([
            'id' =>6,
            'image' => '',
            'text' => '動物に例えるとなんと言われることが多いでしょう？',
            'supplement' => '',
            'quiz_id' => 2,
        ]);

        // choiceテーブルのレコードを作成
        Choices::create([
            'id' => 1,
            'question_id' => 1,
            'text' => '約79万人',
            'is_correct' => true,
        ]);

        Choices::create([
            'id' => 2,
            'question_id' => 1,
            'text' => '約28万人',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 3,
            'question_id' => 1,
            'text' => '約183万人',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 4,
            'question_id' => 2,
            'text' => 'INTECH',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 5,
            'question_id' => 2,
            'text' => 'BIZZTECH',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 6,
            'question_id' => 2,
            'text' => 'X-TECH',
            'is_correct' => true,
        ]);

        Choices::create([
            'id' => 7,
            'question_id' => 3,
            'text' => 'Internet of Things',
            'is_correct' => true,
        ]);

        Choices::create([
            'id' => 8,
            'question_id' => 3,
            'text' => 'Information on Tool',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 9,
            'question_id' => 3,
            'text' => 'Integrate into Technology',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 10,
            'question_id' => 4,
            'text' => '東京',
            'is_correct' => true,
        ]);

        Choices::create([
            'id' => 11,
            'question_id' => 4,
            'text' => 'ハワイ',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 12,
            'question_id' => 4,
            'text' => 'ロンドン',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 13,
            'question_id' => 5,
            'text' => '慶應義塾大学',
            'is_correct' => true,
        ]);

        Choices::create([
            'id' => 14,
            'question_id' => 5,
            'text' => 'ハーバード大学',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 15,
            'question_id' => 5,
            'text' => 'トロント大学',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 16,
            'question_id' => 6,
            'text' => '猫',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 17,
            'question_id' => 6,
            'text' => '犬',
            'is_correct' => false,
        ]);

        Choices::create([
            'id' => 18,
            'question_id' => 6,
            'text' => 'コアラ',
            'is_correct' => true,
        ]);


    }
}














