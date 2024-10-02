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
                @foreach ($bidang1 as $key=>$item)
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card bg-light">
                        <img src="{{ asset('storage/gambar/'.$item->anggota) }}" class="img-fluid" alt="OSIS SMK YPC">
                        <div class="card-body">
                            <h5>{{ $item->nama }}</h5>
                            <p>{{ $item->quotes }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card bg-light">
                        <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid" alt="OSIS SMK YPC">
                        <div class="card-body">
                            <h5>Lorem, ipsum dolor.</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, inventore.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card bg-light">
                        <img src="{{ asset('storage/gambar/foto2.jpeg') }}" class="img-fluid" alt="OSIS SMK YPC">
                        <div class="card-body">
                            <h5>Lorem, ipsum dolor.</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, inventore.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                {{-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card bg-light">
                        <img src="{{ asset('storage/gambar/'.$item->fotobidang) }}" class="img-fluid" alt="OSIS SMK YPC">
                        <div class="card-body">
                            <h5>{{ $item->judul }}</h5>
                            <p>{{ $item-> }}</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

</body>
</html>
