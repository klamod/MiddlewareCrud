<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 align="center">Index</h1>
    <hr>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Julukan</th>
      <th scope="col">Ciri</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $dt)
    <tr>
        <td></td>
        <td>{{$dt->name}}</td>
        <td>{{$dt->julukan}}</td>
        <td>{{$dt->ciri}}</td>
        <td>
    <form method="POST" action="{{route('delete',$dt->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form><a href="{{route('arahedit',$dt->id)}}" class="btn btn-warning">Edit</a>
    </td>
    </tr>
    @endforeach
    </tbody>
</table>
<a href="{{route('arahstore')}}" class="btn btn-primary">Nambah</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>