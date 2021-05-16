<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/daftar.css">

    <title>Daftar</title>
    <link href="assets/img/bulet_logo.png" rel="icon">
</head>

<body>
    <img class="tengah" src="assets/img/a1.png">
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <br>
            <div class='nik'>
                <label>NIK</label>
                <br>
                <input type="number" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan">
                <br>
                @error('nik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class='nl'>
                <label>Nama</label>
                <br>
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="pass">
                <br>
                <label>Password</label>
                </br>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="email">
                <br>
                <label>E-Mail</label>
                </br>
                <input type="email" name="email" class="form-control" placeholder="E-Mail">
            </div>
            <br>
            <div class="daftar">
                <button type="submit" class="btn btn-primary">Daftar</button>
                <button type="button" class="btn btn-link">
                    <a href="login.html" style="color:white">Login</a>
                </button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>
