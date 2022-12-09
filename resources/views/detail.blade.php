<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="container">
    
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand bg-danger rounded px-3" href="#">BajuKita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('product.index')}}">Home</a>
                <a class="nav-link" href="{{route('product.upload')}}">Add Product</a>
                <a class="nav-link" href="#">Custom Product</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <img src="{{$produk->file}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="justify-content-center d-flex gap-3">
                        <a class="btn btn-success">KitaBeli</a>
                        <a class="btn btn-warning" href="{{route('product.updateProdct', $produk->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('product.deleteProduct', $produk->id)}}">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div>
                <p>What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="card-text">Nama Barang: {{$produk->nama_product}}</p>
                    <p class="card-text">Berat Satuan: {{$produk->berat_satuan}}</p>
                    <p class="card-text">Harga: Rp {{$produk->harga_barang}}</p>
                    <p class="card-text">Deskripsi: {{$produk->desc}}</p>
                    <p class="card-text">Stok: {{$produk['status'] == true ? 'masih tersedia' : 'sudah habis'}}</p>
            </div>
        </div>
    </div>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>