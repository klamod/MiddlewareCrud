<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 align="center">Nambah</h1>
    <form action="{{route('proses' , $data->id)}}" method="POST">
        @csrf
        @method('PUT');
        <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="name"  value="{{$data->name}}" required>
  </div>
  <div class="mb-3">
    <label for="julukan" class="form-label">Julukan</label>
    <input name="julukan" type="text" class="form-control" id="julukan" value="{{$data->julukan}}" required>
  </div>
  <div class="mb-3">
    <label for="ciri" class="form-label">Ciri</label>
    <input name="ciri" type="text" class="form-control" id="ciri" value="{{$data->ciri}}" required>
  </div>

       <button type="submit" class="btn btn-primary">Klik</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>