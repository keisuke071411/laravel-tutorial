<h1>編集ページ</h1>

<form action="/admin/movies/update/{{ $movie->id }}" method="POST" style="max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; gap: 32px;" >
  @method('put')
  @csrf
  {!! Form::model($movie, ['method' => 'put', 'route' => ['admin.movies.update', $movie->id] ]) !!}
    <div style="width: 100%; display: flex; align-items: center; gap: 16px;">
      <p>ID: {{ $movie->id }}</p>
        <label>
          タイトル
          <input name=title type="text" value={{$movie->title}}>
        </label>
      </div>
      <img width="200" src={{$movie->image_url}} />
      <button type="submit">更新する</button>
  {{ Form::close() }}
</form>
