<x-user-layout>
  @if (session('message'))
  <div>
    {{ session('message') }}
  </div>
  @endif
  <table>
    <tr>
      <th>id</th>
      <th>設問</th>
      <th>選択肢①</th>
      <th>選択肢②</th>
      <th>選択肢③</th>
    </tr>
    @foreach ($quiz->questions as $question)
    <tr>
      <td>
        {{ $question->id }}
      </td>
      <td>
        {{ $question->text }}
      </td>
      @foreach ($question->choices as $choice)
      <td>
        {{ $choice->text }}
      </td>
      @endforeach
      <td>
        <button>
          <a href="{{ route('question.edit', $question->id) }}">編集</a>
        </button>
      </td>
    </tr>
    @endforeach
  </table>
</x-user-layout>