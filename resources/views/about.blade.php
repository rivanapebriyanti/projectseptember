<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        /* Style khusus untuk halaman about */
        
        .about h1 span {
            color: #007bff;
        }
        .about .icon i {
            font-size: 2.5rem;
            color: #007bff;
        }
        .card-body h5 {
            color: #13357B;
            font-weight: bold;
        }
        .card-body p {
            font-size: 14px;
        }
        /* Style untuk form kotak saran */
        .kotak-saran {
            border: 2px solid #13357B;
            padding: 20px;
            border-radius: 10px;
            background-color: #f8f9fa;
        }
        .kotak-saran input {
            border: none;
            border-bottom: 2px solid #13357B;
            padding: 5px 0;
            width: 100%;
            box-sizing: border-box;
            background-color: transparent;
        }
        .kotak-saran input:focus {
            outline: none;
            border-bottom-color: #007bff;
        }
        .btn-custom {
            background-color: #13357B;
            color: white;
        }
        .btn-custom:hover {
            background-color: #007bff;
        }
        /* .footer-section a {
            color: #1a0dab;
        } */
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

    {{-- Section about --}}
    <div class="container-fluid about py-5 bg-light">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h4 class="mb-0">About Us</h4>
                <h1 class="bold mt-3">Welcome to <span style="color: #13357B">OSIS SMK YPC</span></h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum, doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda?</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-lg h-100">
                        <div class="card-body text-center">
                            <div class="icon mb-4">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <h5>VISI</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vero sit placeat explicabo, porro fugit, ipsa maiores aperiam commodi assumenda repudiandae reprehenderit excepturi id laboriosam quibusdam? Veritatis architecto labore sapiente!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-lg h-100">
                        <div class="card-body text-center">
                            <div class="icon mb-4">
                                <i class="bi bi-flag"></i>
                            </div>
                            <h5>MISI</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vero sit placeat explicabo, porro fugit, ipsa maiores aperiam commodi assumenda repudiandae reprehenderit excepturi id laboriosam quibusdam? Veritatis architecto labore sapiente!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kotak Saran --}}
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="kotak-saran">
                        <h4 class="text-center mb-4">Kotak Saran</h4>
                        <form action="/create-kotaksaran" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="pesan">Pesan</label>
                                <input type="text" name="pesan" required>
                            </div>
                            <button type="submit" class="btn btn-custom btn-block w-100">Kirim</button>
                        </form>
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

    <!-- Bootstrap JS and Icon Library -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
