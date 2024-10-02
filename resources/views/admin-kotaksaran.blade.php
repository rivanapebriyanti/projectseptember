<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        /* Custom styles */
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn {
            background-color: #0a2754;
            color: #fff;
        }
        
        .btn:hover {
            transition: background-color 0.3s ease;
            border-color: #13357B
        }
    
        .btn-custom {
            background: linear-gradient(135deg, #007bff, #13357B);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #0056b3, #0a2754);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }
        .btn-danger-custom, .btn-info-custom {
            border-radius: 30px;
            padding: 5px 15px;
        }

        .btn-danger-custom:hover, .btn-info-custom:hover {
            transform: translateY(-2px);
        }

        table thead {
            background-color: #13357B;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        img {
            border-radius: 5px;
        }
    </style>
</head>

<body>

    @if (Session::get('pesan'))
        <div class="alert alert-success">
            {{ Session::get('pesan') }}
        </div>
    @endif

    <nav class="custom-navbar navbar navbar-expand-md navbar-dark fixed-top" aria-label="Furni navigation bar"
        style="background-color: #13357B">
        <div class="container">
            <a class="navbar-brand" href="#">KOTAK SARAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link btn btn-light" href="/logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="layoutSidenav_content">
        <div class="container" style="margin-top: 120px">
            @if (Session::has('pesan'))
                <div class="alert alert-success">{{ Session::get('pesan') }}</div>
            @endif

            <div class="row mb-4">

                <div class="col-md-6">
                    <form action="/admin-kotaksaran" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="cari" class="form-control" placeholder="Search"
                                style="border-color :#13357B;">
                            <button class="btn text-dark" style="border-color :#13357B; background-color: #fff"
                                type="submit">Go</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="text-white">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>PESAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kotaksaran as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->pesan }}</td>
                                    <td>
                                        <a href="/delete-kotaksaran/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')"
                                            class="btn btn-danger-custom btn-sm" style="width: 80px">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
