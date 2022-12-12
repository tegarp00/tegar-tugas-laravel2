<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container d-flex">
            <img style="height: 50px;" src="{{asset('images/bajukita.png')}}" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="align-items-center">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="{{route('product.upload')}}">Add Product</a>
                        <a class="nav-link" href="#">Article</a>
                    </div>
                </div>
            </div>
            <div>
                @if(session()->has('logged'))
                    <a class="btn btn-danger" href="/logout">logout</a>
                @else
                    <a class="btn btn-success" href="/login">login</a>
                @endif
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            @foreach($produk as $prod)
        <div class="col-lg-4">
            <div class="card">
                <img src="{{$prod->file}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Nama Barang: {{$prod->nama_product}}</p>
                    <!-- <p class="card-text">Berat Satuan: {{$prod->berat_satuan}}</p> -->
                    <p class="card-text">Harga: Rp {{number_format($prod->harga_barang)}}</p>
                    <!-- <p class="card-text">Deskripsi: {{$prod->desc}}</p> -->
                    <!-- <p class="card-text">Stok: {{$prod['status'] == true ? 'masih tersedia' : 'sudah habis'}}</p> -->
                    <div>
                        <a class="me-2 btn btn-primary" href="{{route('product.detailProduct', $prod->id)}}">Details</a>
                        <a class="btn btn-success">KitaBeli</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    



    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>