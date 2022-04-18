<Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Data produk</title>
  </head>
  <body>
    <br>
    <br>
    <br>
    <div class="container">
        <h3>Tambah Produk</h3>
        <form action="{{ url('/store') }}" method="POST">
        @csrf
        <div class="form-group">
    <label for="Input1">Nama Produk</label>
    <input type="text" class="form-control" id="Input1" name="name"> 
    </div>
  <div class="form-group">
    <label for="Input1">Deskripsi</label>
    <input type="text" class="form-control" id="Input1" name="description"> 
  </div>
  <div class="form-group">
    <label for="Input1">Harga Produk</label>
    <input type="text" class="form-control" id="Input1" name="price"> 
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>