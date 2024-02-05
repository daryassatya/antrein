<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Starter Pack with Header</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <header>
    <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="#">Fixed navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> --}}
                    </ul>
                    @if (auth()->check())
                        <a class="text-light" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5 mb-5">
        <div class="row pt-5">
            <div class="col-3 ms-auto">
                <div class="card">
                    <div class="card-body" style="background: #E0E0E0;">
                        <h4>Estimasi waktu tunggu :</h4>
                        <h5>15 menit</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                @include('components.flash-message')
                            </div>
                            <div class="col-6 mx-auto text-center bg-dark text-light" style="border-radius: 25px;">
                                <p style="font-size: 80px;">10</p>
                            </div>
                            <div class="col-12 mt-3">
                                <ul class="list-group overflow-auto" style="height: 330px;">
                                    @foreach ($queues as $queue)
                                        <li class="list-group-item">{{ $queue->user->name }}</li>
                                    @endforeach
                                    {{-- <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li>
                                    <li class="list-group-item">Nama sesseorang</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center py-3" style="border-top: 0px; background: #fff;">
                        @if (auth()->check())
                        <form action="{{ route('ambil-antrian', ['perusahaanID' => $perusahaan->id, 'userID' => Auth::user()->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-dark">Ambil Antrian</button>
                        </form>
                        @else
                            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Ambil Antrian</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Username/Email</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>
