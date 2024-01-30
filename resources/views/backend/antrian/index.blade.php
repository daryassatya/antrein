<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6nx1t+0BAsjFuCZSmKbSSUnQlmh/jb" crossorigin="anonymous">
    <title>Halaman Kosong dengan Card Bootstrap</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            background-color: #f8f9fa; /* Warna latar belakang sedikit abu-abu */
        }
        
        .custom-card {
            background-color: #ffffff; /* Warna latar belakang card putih */
            border: 1px solid #dee2e6; /* Warna border card */
            border-radius: 10px;
        }
        
        .count-antrian-box{
            border: black solid 1px;
            width: 20rem;
            height: 20rem;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="card text-center custom-card" style="width: 38rem; height: 800px">
        <div class="card-body">
            <div class="row">
                <div class="count-antrian-box">
                    <span class="my-auto mx-auto">10</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional: Tambahkan script Bootstrap JS jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js" integrity="sha384-X5F3fj4JeL6z6r4zzw8
