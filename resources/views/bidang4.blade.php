<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bidang OSIS</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .section-title {
            font-size: 24px;
            font-weight: bold;
            color: #13357B;
            margin-bottom: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-radius: 10px;
            max-height: 200px;
            object-fit: cover;
        }

        .card h5 {
            font-size: 18px;
            font-weight: bold;
            color: #1a0dab;
        }

        .card p {
            font-size: 14px;
            color: #555;
        }

        .card-shadow {
            margin-top: 50px;
        }

        .content-center {
            text-align: center;
        }
    </style>
</head>
<body>
    {{-- navbar start --}}
    {{-- <div class="container-fluid position-relative p-2"> --}}
        <nav class="navbar navbar-expand-lg navbar px-6 px-lg-5 py-4 py-lg-2">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-map-marker-alt me-3" style="font-style: roboto text-light"></i>OSIS SMK YPC</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link active">Beranda</a>
                    <a href="/about" class="nav-item nav-link ">About</a>
                    <a href="/pengumuman" class="nav-item nav-link">Pengumuman</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link">Bidang <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg></a>
                        <div class="dropdown-menu m-0">
                            <a href="/bidang" class="dropdown-item">BPH</a>
                            <a href="/bidang1" class="dropdown-item">Bidang 1</a>
                            <a href="/bidang2" class="dropdown-item">Bidang 2</a>
                            <a href="/bidang3" class="dropdown-item">Bidang 3</a>
                            <a href="/bidang4" class="dropdown-item">Bidang 4</a>
                            <a href="/bidang5" class="dropdown-item">Bidang 5</a>
                            <a href="/bidang6" class="dropdown-item">Bidang 6</a>
                            <a href="/bidang7" class="dropdown-item">Bidang 7</a>
                            <a href="/bidang8" class="dropdown-item">Bidang 8</a>
                            <a href="/bidang9" class="dropdown-item">Bidang 9</a>
                        </div>
                    </div>
                    <a href="/kegiatan" class="nav-item nav-link">Kegiatan</a>
                    <a href="/kontak" class="nav-item nav-link">Kontak</a>
                </div>
                <a href="/auth" class="btn rounded-pill py-2 px-4 ms-lg-4 text-white " style="background-color: #13357B;">Login</a>
            </div>
        </nav>
        {{-- navbar end --}}
    <div class="container-fluid bidang py-5 bg-light">
        <div class="container py-5">
                
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid mb-4" alt="OSIS SMK YPC" style="border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                <h5 class="section-title px-3">BIDANG 1</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nulla numquam fugit qui dicta natus.</p>
            </div>
            <!-- Judul Seksi -->
            
            
            <!-- Bidang Cards -->
            <div class="row text-center">
                <!-- Card 1 -->
                @foreach ($bidang4 as $key=>$item)
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card bg-light">
                        <img src="{{ asset('storage/gambar/'.$item->anggota) }}" class="img-fluid" alt="OSIS SMK YPC">
                        <div class="card-body">
                            <h5>{{ $item->nama }}</h5>
                            <p>{{ $item->kelas }}</p>
                            <p>{{ $item->quotes }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
{{-- footer start --}}
<footer class="footer-section ">
    <div class="container relative">
        <div class="border-top copyright" >
            <div class="row pt-4">
                <div class="col-lg-6">
                    <a class="mb-4 text-center text-lg-start" style="color: #1a0dab" href=""><img src="{{ asset('storage/gambar/smkypc.png') }}" alt="" style="width: 10%; margin-right:3%" >SMK YPC TASIKMALAYA <br></a><p style="margin-left: 13%">Jl. Garut - Tasikmalaya, Cikunten, Kec. Singaparna, Kabupaten Tasikmalaya, Jawa Barat 46414</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- footer end --}}
</body>
</html>
