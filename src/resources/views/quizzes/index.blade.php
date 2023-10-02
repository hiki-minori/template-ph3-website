<x-user-layout>
  @if (session('message'))
  <div>
    {{ session('message') }}
  </div>
  @endif
  <table>
    <tr>
      <th>id</th>
      <th>クイズ名</th>
      <th>作成日</th>
      <th>更新日</th>
      <th>カテゴリ選択</th>
      <th>クイズ削除</th>
    </tr>

    @foreach ($quizzes as $question)

    <tr>
      <td>
        {{ $question->id }}
      </td>
      <td>
        {{ $question->name }}
      </td>
      <td>
        {{ $question->created_at }}
      </td>
      <td>
        {{ $question->updated_at }}
      </td>
      <td>
        <button>
          <a href="{{ route('quizzes.selectedCategory', $question->id) }}">選択</a>
        </button>
      </td>
      <td>
        <form action="{{ route('quiz.delete', $question->id) }}" method="post" id="deleteForm{{$question->id}}">
          @csrf
          <input type="hidden" name="quiz_id" value="{{ $question->id }}">
          <button class="deleteQuiz">削除</button>
        </form>
      </td>

    </tr>
    @endforeach
  </table>
  <script src="{{ asset('js/quiz.js')}}"></script>
</x-user-layout>
