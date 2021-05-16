<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/login.css">

    <title>Login</title>
    <link href="assets/img/bulet_logo.png" rel="icon">
  </head>
  <body>
    <img class="tengah" src="assets/img/a1.png">
    <div class="container">
        <h2 class='text-center'>Login</h2>
        <form method="POST" action="{{ route('login') }} ">
            @csrf
            <div class='user'>
                <label>email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username">
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <div class='password'>
                <label>Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" id="password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <div class="cek">
              <input type="checkbox" onclick="lihatpassword()">
              <label class="type-text">Lihat Password</label>
            </div>
            <div class="tombol"><button type="submit" class="btn btn-primary">Login</button></div>
        </form>

        <form class="daftar">
          <button type="button" class="btn btn-link">
            <a href="{{ route('register') }} ">Daftar</a>
          </button>
        </form>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      function lihatpassword(){
        var pass = document.getElementById("password");
        if(pass.type="password"){
          pass.type="text";
        }
        else{
          pass.type="password";
        }
      }
    </script>

  </body>
</html>
