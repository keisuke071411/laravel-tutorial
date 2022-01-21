<html>
  <head>
    <title>管理者ページ</title>
  </head>
  <body>
    <p>Hello World<p>
      <div>
        {!! Form::open(['method' => 'get', 'route' => 'admin.movies.create']) !!}
          {{ Form::submit('作成ボタン') }}
        {!! Form::close() !!}
      </div>
    <table>
      <tr>
        <td>id</td>
        <td>タイトル</td>
        <td>画像</td>
      </tr>
      @foreach ($movies as $movie)
        <tr>
          <td>{{$movie->id}}</td>
          <td>{{$movie->title}}</td>
          <td>
            <img width="200" src={{$movie->image_url}} />
          </td>
          <td>
            <div>
              {!! Form::open(['method' => 'delete', 'route' => ['admin.movies.delete', $movie->id] ]) !!}
                {{ Form::submit('削除ボタン') }}
              {{ Form::close() }}
            </div>
          </td>
          <td>
            <div>
              {!! Form::open(['method' => 'get', 'route' => ['admin.movies.edit', $movie->id] ]) !!}
                {{ Form::submit('編集ボタン') }}
              {{ Form::close() }}
            </div>
          </td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
