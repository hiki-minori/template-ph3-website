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

    </tr>
    @endforeach
  </table>
</x-user-layout>
