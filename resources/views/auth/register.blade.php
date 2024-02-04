<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
    rel="stylesheet"
    />
    <style>
        .bg-custom{
            background-color: #909B9F;
        }

        
        .image-container {
            height: 100%; /* Mengatur tinggi sama dengan parent-nya */
            display: flex; /* Menggunakan flexbox */
            justify-content: center; /* Menengahkan secara horizontal */
            align-items: center; /* Menengahkan secara vertikal */
        }

        .image-container img {
            max-height: 80%; /* Mengatur tinggi maksimal gambar, sesuaikan sesuai kebutuhan */
            border-radius: 1rem 0 0 1rem;
        }
    </style>
</head>
<body>
    <section class="" style="background-color: #E05256;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-12 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                    @endif
                                    <form action="{{ route('register') }}" method="post">
                                    @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #E05256;"></i>
                                            <span class="h1 fw-bold mb-0">AntreIn</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register into your account</h5>

                                        <div class="form-outline mb-4">
                                            <label>Full Name</label>
                                            <input type="text" id="" name="name" class="form-control form-control-lg border border-secondary" value="{{ old('name') }}">
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label>Username</label>
                                            <input type="text" id="" name="username" class="form-control form-control-lg border border-secondary" value="{{ old('username') }}">
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <label>Email</label>
                                            <input type="email" id="" name="email" class="form-control form-control-lg border border-secondary" value="{{ old('email') }}">
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label>Password</label>
                                            <input type="password" id="" name="password" class="form-control form-control-lg border border-secondary">
                                        </div>
                                        
                                        
                                        <div class="form-outline mb-4">
                                            <label>Confirm Password</label>
                                            <input type="password" id="" name="password_confirmation" class="form-control form-control-lg border border-secondary">
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>