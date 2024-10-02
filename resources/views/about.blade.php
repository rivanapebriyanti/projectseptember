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
        .footer-section a {
            color: #1a0dab;
        }
    </style>
</head>
<body>

    {{-- Navbar start --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 py-3">
        <a href="" class="navbar-brand">
            <h1><i class="fa fa-map-marker-alt me-3"></i>OSIS SMK YPC</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Beranda</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="/bidang" class="nav-link">Bidang <i class="bi bi-caret-down-fill"></i></a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">BPH</a>
                        <a href="#" class="dropdown-item">Bidang 1</a>
                        <a href="#" class="dropdown-item">Bidang 2</a>
                        <!-- Tambahan lainnya -->
                    </div>
                </div>
                <a href="/kegiatan" class="nav-item nav-link">Kegiatan</a>
                <a href="/kontak" class="nav-item nav-link">Kontak</a>
            </div>
            <a href="/auth" class="btn btn-custom rounded-pill py-2 px-4 ms-lg-4">Login</a>
        </div>
    </nav>
    {{-- Navbar end --}}

    {{-- Section about --}}
    <div class="container-fluid about py-5 bg-light">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h4 class="mb-0">About Us</h4>
                <h1 class="bold mt-3">Welcome to <span>OSIS SMK YPC</span></h1>
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
                        <form action="" method="post">
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

    {{-- Footer start --}}
    <footer class="footer-section bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a href="#" class="d-block text-center text-lg-start mb-3">
                        <img src="{{ asset('storage/gambar/smkypc.png') }}" alt="SMK YPC" style="width: 10%; margin-right:3%">
                        SMK YPC TASIKMALAYA
                    </a>
                    <p class="text-center text-lg-start">Jl. Garut - Tasikmalaya, Cikunten, Kec. Singaparna, Kabupaten Tasikmalaya, Jawa Barat 46414</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer end --}}

    <!-- Bootstrap JS and Icon Library -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
