<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kegiatan</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .about h4 {
            color: #13357B;
            font-weight: bold;
        }

        .about h1 span {
            color: #1a0dab;
            font-weight: bold;
        }

        .card-shadow {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }

        .card img {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-body h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #13357B;
        }

        .card-body p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        .btn-custom {
            color: white;
            background-color: #1a0dab;
            border-radius: 50px;
            padding: 12px 30px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #13357B;
        }

        .card-body .date {
            text-align: right;
            font-size: 0.9rem;
            color: #777;
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

    <!-- Section About Us -->
    <div class="container-fluid about py-5 bg-white">
        <div class="container py-5">
            

            <!-- Content Card -->
            <div class="container py-5 content-center">
                {{-- <div class="card"> --}}
                    <div class="row">
                        {{-- @foreach ($kegiatan as $key=>$item) --}}
                        <div class="col-lg-12 mb-5 mx-auto">
                            <div class="card " style="border:none;">
                                <div class="card-body">
                                    <div class="row g-5 align-items-center">
                                        <div class="col-lg-12">
                                            <!-- Text content -->
                                            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                                                <h4 class="mb-0">Kegiatan</h4>
                                                <h1 class="bold mt-3">{{ $kegiatan->judul }}</h1>
                                            </div>
                                            <h1 class="text-center mt-3 mb-4"></h1>
                                        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                                            <img src="{{ asset('storage/gambar/'.$kegiatan->foto) }}" class="img-fluid mb-4" alt="OSIS SMK YPC" style="border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                                        </div>
                                            <p>{{ $kegiatan->deskripsi }}</p>
                                            <div class="date mt-4">{{ $kegiatan->tanggal }}</div>
                                            {{-- <a href="{{ $item->gdrive }}">{{ $item->gdrive }}</a> --}}
                                            <a href="{{ $kegiatan->gdrive }}" class="btn btn-primary rounded-pill py-2 px-4" target="_blank">Lihat drive</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
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






