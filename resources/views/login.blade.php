<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>

    <div class="container-fluid about py-5 bg-light">
        <h5 class="section-about-title pe-3 text-center">About Us</h5>
        <h2 class="mb-4 text-center">Welcome to <span style="color: #1a0dab">OSIS SMK YPC</span></h2>
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B">
                        <img src="{{ asset('storage/gambar/logo osis smk ypc.webp') }}" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7" style="">
                    
                    <div class="row gy-2 gx-4 mb-4 " style="margin-left: 10%">
                        <div class="col-sm-6">
                            <div class="card-shadow">
                                <div class="card bg-light" style="border: none; width:400px; height:500px margin-left:50%">
                                    <div class="card-body" style="margin-top: -40px">
                                        <form action="/auth" method="post">
                                            @csrf
                                            <div class="form-group mt-4">
                                                <label for="email">Email</label>
                                                <input type="email" class="bg-light" name="email" style=" border:none; border-bottom:2px solid #13357B; padding:5px 0; width:100%; 
                                                box-sizing:border-box;" onfocus="this.style.outline='none'; this.style.borderBottomColor='#007bff';"
                                                onblur="this.style.borderBottomColor='black'">
                                            </div>
                                            <div class="form-group mt-4">
                                                <label for="password">Password</label>
                                                <input type="password" class="bg-light" name="password" style="border:none; border-bottom:2px solid #13357B; padding:5px 0; width:100%; 
                                                box-sizing:border-box;" onfocus="this.style.outline='none'; this.style.borderBottomColor='#007bff';"
                                                onblur="this.style.borderBottomColor='black'">
                                            </div>
                                            <button type="submit" class="btn btn-secondary btn-block mt-5  w-100" style="background-color: #13357B;">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>