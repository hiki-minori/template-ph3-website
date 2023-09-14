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
    @foreach ($quizzes as $quiz)
    <tr>
      <td>
        {{ $quiz->id }}
      </td>
      <td>
        {{ $quiz->name }}
      </td>
      <td>
        {{ $quiz->created_at }}
      </td>
      <td>
        {{ $quiz->updated_at }}
      </td>

    </tr>
    @endforeach
  </table>
</x-user-layout>
