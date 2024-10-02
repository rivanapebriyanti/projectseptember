<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSIS SMK YPC</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

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
                            <a href="" class="dropdown-item">BPH</a>
                            <a href="/bidang1" class="dropdown-item">Bidang 1</a>
                            <a href="" class="dropdown-item">Bidang 2</a>
                            <a href="" class="dropdown-item">Bidang 3</a>
                            <a href="" class="dropdown-item">Bidang 4</a>
                            <a href="" class="dropdown-item">Bidang 5</a>
                            <a href="" class="dropdown-item">Bidang 6</a>
                            <a href="" class="dropdown-item">Bidang 7</a>
                            <a href="" class="dropdown-item">Bidang 8</a>
                            <a href="" class="dropdown-item">Bidang 9</a>
                        </div>
                    </div>
                    <a href="/kegiatan" class="nav-item nav-link">Kegiatan</a>
                    <a href="/kontak" class="nav-item nav-link">Kontak</a>
                </div>
                <a href="/auth" class="btn rounded-pill py-2 px-4 ms-lg-4 text-white " style="background-color: #13357B;">Login</a>
            </div>
        </nav>
        {{-- navbar end --}}

    {{-- about start --}}
    <div class="container-fluid about py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- Bagian gambar -->
                <div class="col-lg-5">
                    <div class="h-100" style="border: 15px solid transparent; border-color: #13357B transparent; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
                        <img src="{{ asset('storage/gambar/logo osis smk ypc.webp') }}" class="img-fluid w-100 h-100" alt="OSIS SMK YPC" style="transition: transform 0.3s ease;">
                    </div>
                </div>
                
                <!-- Bagian teks -->
                <div class="col-lg-7">
                    <h5 class="section-about-title pe-3" style="color: #13357B; font-weight: bold;">About Us</h5>
                    <h1 class="mb-4">Welcome to <span style="color: #1a0dab">OSIS SMK YPC</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum, doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <!-- Tombol dengan style yang lebih menarik -->
                    <a class="btn-custom rounded-pill py-3 px-5 mt-2" href="/about" style="color: white; background-color: #1a0dab; transition: background-color 0.3s ease;">Read More</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CSS tambahan untuk efek hover -->
    <style>
        .col-lg-5 img:hover {
            transform: scale(1.05);
        }
        .btn:hover {
            background-color: #13357B;
        }
    </style>
    {{-- about end --}}
 

{{-- Pengumuman start --}}

<div class="container-fluid bg-gradient-primary pengumuman py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h1 class="mb-0 text-dark display-4">Pengumuman</h1>
        </div>
        <div class="row">
            @foreach ($pengumuman as  $item)
            <div class="col-lg-6 mb-4">
                <div class="pengumuman-content-inner d-flex align-items-center bg-white shadow-lg rounded p-4 pe-0" style="border-left: 6px solid #13357B; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="icon-box me-4">
                        <i class="fas fa-bullhorn fa-3x text-primary"></i>
                    </div>
                    <div class="pengumuman-content">
                        <h5 class="mb-3 fw-bold text-dark">{{ $item->judul }}</h5>
                        {{-- <p class="mb-0 text-muted">{{ $item->deskripsi }}</p> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Pengumuman end --}}

<style>
    .pengumuman-content-inner:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .pengumuman h1 {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

{{-- Pengumuman end --}}



{{-- bidang start --}}
    {{-- <div class="container-fluid bidang py-5 bg-light">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">BIDANG</h5>
                <h1 class="mb-4">Apa itu bidang?</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                </p>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="bidang-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-12">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 1</h5>
                                            <a href="/bidang1" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>   

                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 1</h5>
                                            <a href="/bidang1" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto1.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 2</h5>
                                            <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 3</h5>
                                            <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 4</h5>
                                            <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto1.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 5</h5>
                                            <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 6</h5>
                                            <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 7</h5>
                                            <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto1.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 8</h5>
                                            <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="bidang-item">
                                    <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="bidang-content">
                                        <div class="bidang-info">
                                            <h5 class="text-white text-uppercase mb-2">Bidang 9</h5>
                                            <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .bidang-item img {
        transition: transform 0.3s ease;
    }

    .bidang-item:hover img {
        transform: scale(1.1);
    }

    .bidang-content {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .bidang-item:hover .bidang-content {
        opacity: 1;
    }

    .btn-hover:hover {
        text-decoration: underline;
    }
</style> --}}

<div class="container-fluid bidang py-5 bg-light">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">BIDANG</h5>
            <h1 class="mb-4">Apa itu bidang?</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.</p>
        </div>
        <div class="tab-class text-center">
            <div class="tab-content">
                <div id="bidang-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 1</h5>
                                        <a href="/bidang1" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        {{-- @foreach ($bidang1 as $key=> $item) --}}
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 1</h5>
                                        <a href="/bidang1" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        {{-- @endforeach --}}
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto1.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 2</h5>
                                        <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 3</h5>
                                        <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 4</h5>
                                        <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto1.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 5</h5>
                                        <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 6</h5>
                                        <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 7</h5>
                                        <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto1.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 8</h5>
                                        <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="bidang-item">
                                <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="bidang-content">
                                    <div class="bidang-info">
                                        <h5 class="text-white text-uppercase mb-2">Bidang 9</h5>
                                        <a href="#" class="btn-hover text-white">Lihat Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Bidang end --}}

{{-- Kegiatan start --}}
     <div class="container-fluid kegiatan py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Kegiatan</h5>
                <h1>Kegiatan yang diadakan oleh OSIS</h1>
            </div>
            <div class="row g-5">
                @foreach ($kegiatan as $key=>$item)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="kegiatan-item">
                        <div class="kegiatan-img">
                            <img src="{{ asset('storage/gambar/'.$item->foto) }}" class="img-fluid w-100 rounded" alt="">
                            <div class="kegiatan-content">
                                <a href="#" class="text-center text-decoration-none">
                                    <h4 class=" text-white">MAULID NABI</h4>
                                    {{-- <p class="m-0 text-white">Web Analysis</p> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="kegiatan-item">
                        <div class="kegiatan-img">
                            <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="kegiatan-content">
                                <a href="#" class="text-center text-decoration-none">
                                    <h4 class="text-white">17 AGUSTUS</h4>
                                    {{-- <p class="m-0 text-white">Cyber Security Core</p> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="kegiatan-item">
                        <div class="kegiatan-img">
                            <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="kegiatan-content">
                                <a href="#" class="text-center text-decoration-none">
                                    <h4 class="text-white">PPDB</h4>
                                    {{-- <p class="m-0 text-white">Upcomming Phone</p> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
{{-- Kegiatan end --}}

{{-- Kontak start --}}
@if (Session::get('pesan'))
        <div class="alert alert-success">
            {{ Session::get('pesan') }}
        </div>
    @endif
    
<div class="container-fluid kontak bg-light py-4 mb-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h1 class="section-about-title pe-3">Kontak us</h1>
            {{-- <h1 class="mb-0">Pengumuman</h1> --}}
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card-shadow">
                    <div class="card bg-light" style="border:none; width: 400px; height:500px; margin-left:10% ">
                        <h4 class="bold text-center mt-3">Kotak saran</h4>
                        <div class="card-body" style="margin-top: -40px">
                            <form action="/create-kotaksaran" method="post">
                                @csrf
                                <div class="form-group mt-5">
                                    <label for="name">Nama</label>
                                    <input type="text" class="bg-light" name="nama" style="border:none; border-bottom:2px solid #13357B; padding:5px 0; width:100%; 
                                    box-sizing:border-box;" onfocus="this.style.outline='none'; this.style.borderBottomColor='#007bff';"
                                    onblur="this.style.borderBottomColor='black'">
                                </div>
                                <div class="form-group mt-5 ">
                                    <label for="email">Email</label>
                                    <input type="text" class="bg-light" name="email" style=" border:none; border-bottom:2px solid #13357B; padding:5px 0; width:100%; 
                                    box-sizing:border-box;" onfocus="this.style.outline='none'; this.style.borderBottomColor='#007bff';"
                                    onblur="this.style.borderBottomColor='black'">
                                </div>
                                <div class="form-group mt-5 ">
                                    <label for="pesan">Pesan</label>
                                    <input type="text" class="bg-light" name="pesan" style="border:none; border-bottom:2px solid #13357B; padding:5px 0; width:100%; 
                                    box-sizing:border-box;" onfocus="this.style.outline='none'; this.style.borderBottomColor='#007bff';"
                                    onblur="this.style.borderBottomColor='black'">
                                </div>
                                <button type="submit" class="btn btn-secondary btn-block mt-5  w-100" style="background-color: #13357B;">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mx-auto">
                <div class="pengumuman-content-inner d-flex align-items-center bg-light border rounded" style=" border-color: #13357B">
                    <div class="pengumuman-icon p-4">
                        <i class="bi bi-instagram"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                          </svg></i>
                    </div>
                    <div class="pengumuman-content ps-3">
                        <a href="https://www.instagram.com/osis.smkypc/?hl=en">https://www.instagram.com/osis.smkypc/?hl=en</a>
                    </div>
                </div>
                <div class="pengumuman-content-inner d-flex align-items-center bg-light border rounded mt-4" style=" border-color: #13357B">
                    <div class="pengumuman-icon p-4">
                        <i class="bi bi-youtube"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                          </svg></i>
                    </div>
                    <div class="pengumuman-content ps-3">
                        <a href="http://www.youtube.com/@osis.smkypc">http://www.youtube.com/@osis.smkypc</a>
                    </div>
                </div>
                <div class="pengumuman-content-inner d-flex align-items-center bg-light border rounded mt-4" style=" border-color: #13357B">
                    <div class="pengumuman-icon p-4">
                        <i class="bi bi-whatsapp align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                          </svg></i>
                    </div>
                    <div class="pengumuman-content ps-3">
                        <a href="tel:+628112224">+62 811-2224-563</a>
                    </div>
                </div>
                <div class="pengumuman-content-inner d-flex align-items-center bg-light border rounded mt-4" style=" border-color: #13357B">
                    <div class="pengumuman-icon p-4">
                        <i class="bi bi-geo-alt-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                          </svg></i>
                    </div>
                    <div class="pengumuman-content ps-3">
                        <a href="https://goo.gl/maps/yourmaplocation">Jl. Garut - Tasikmalaya, Cikunten, Kec. Singaparna, Kab. Tasikmalaya, Jawa Barat, Tasikmalaya 46414</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Kontak end --}}

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
