<html>
  <head>
    <title>管理者ページ</title>
  </head>
  <body>
    <p>Hello World<p>
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
        </tr>
      @endforeach
    </table>
  </body>
</html>
