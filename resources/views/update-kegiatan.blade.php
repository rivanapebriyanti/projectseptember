<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    @if (Session::get('pesan'))
    {{ Session::get('pesan') }}
@endif <br>
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark fixed-top" arial-label="Furni navigation bar" style="background-color: #13357B">
    
    <div class="container">
        <a class="navbar-brand" href="#">KEGIATAN</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard">Home</a>
                </li>
                <ul class="custom-navbar-cta navbar-nav mb-3 mb-md-1 ms-5">
                    <li><a class="nav-link" href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                      </svg></a></li>
                </ul>
        </div>
    </div>
</nav>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5" >
                    <div class="card-header text-center">
                        Edit Kegiatan 
                    </div>
                    <div class="card-body">
                        {{-- @foreach ($produk as $key=>$item) --}}
                                
                        <form action="/update-kegiatan/{{ $kegiatan->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Judul</label>
                                <input type="text" name="judul" class="form-control" id="productName" placeholder="Edit judul kegiatan" value="{{ $kegiatan->judul }}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="price">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="price" placeholder="Edit deskripsi" value="{{ $kegiatan->deskripsi }}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="quantity">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="quantity" placeholder="Edit tanggal"  value="{{ $kegiatan->tanggal }}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" name="gambar" class="form-control-file" id="image">
                            </div>
                            <div class="form-group pt-2">
                                <label for="price">Link Gdrive</label>
                                <input type="text" name="gdrive" class="form-control" id="price" placeholder="Edit deskripsi" value="{{ $kegiatan->gdrive }}">
                            </div>
                            <input type="submit" class="btn btn-secondary w-100 btn-block mt-5 text-white" style="background-color: #13357B"></input>
                        </form>
                            {{-- @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>