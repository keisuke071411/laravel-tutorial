<html>
  <body>
    <h1>新規作成</h1>

    @csrf
    {!! Form::open(['route' => ['admin.movies.store'] ]) !!}
    <form action="/admin/movies/store" method="POST" style="max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; gap: 32px;" >
        <div style="width: 100%; display: flex; align-items: center; gap: 16px;">
          {!! Form::label('id', 'ID:') !!}
          {!! Form::number('id', null) !!}
          {!! Form::label('title', 'タイトル:') !!}
          {!! Form::text('title', null) !!}
          {!! Form::label('image_url', '画像:') !!}
          {!! Form::text('image_url', null) !!}
          <button type="submit">さくせいする</button>
        </form>
      {{ Form::close() }}
  </body>
</html>
