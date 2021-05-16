<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/daftar.css">

    <title>Daftar</title>
    <link href="assets/img/bulet_logo.png" rel="icon">
  </head>
  <body>
    <img class="tengah" src="assets/img/a1.png">
    <div class="container">
      <form>
        <div class='nik'>
            <label>NIK</label>
            <Br>
              <input type="text" class="form-control" placeholder="Nomor Induk Kependudukan">
            </Br>
        </div>

        <div class='nl'>
            <label>Nama Lengkap</label>
            <br>
              <input type="text" class="form-control" placeholder="Nama Lengkap">
            </br>
        </div>

        <div class="tgl">
          <label>Tempat, Tanggal Lahir</label>
          <input type="text" class="form-control" placeholder="Tempat, Tanggal Lahir">
          <div class="form-text">
            <font color="black">
              <i>example : Banten,18 April 2001</i>
            </font>
          </div>
        </div>
        <div class="alm">
          <br>
            <label>Alamat</label>
          </br>
          <input type="text" class="form-control" placeholder="Alamat Asli">
        </div>
        <div class="jk">
          <br>
            <label>Jenis Kelamin</label>
          </br>
          <input type="text" class="form-control" placeholder="Jenis Jelamin">
        </div>
        <div class="no">
          <br>
            <label>No Telp</label>
          </br>
          <input type="text" class="form-control" placeholder="No Telp">
        </div>
        <div class="user">
          <br>
            <label>Username</label>
          </br>
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="pass">
          <br>
            <label>Password</label>
          </br>
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="passcon">
          <br>
          <label>Ulang Password</label>
          </br>
          <input type="password" class="form-control" placeholder="Ulang Password">
        </div>
        <div class="email">
          <br>
            <label>E-Mail</label>
          </br>
          <input type="text" class="form-control" placeholder="E-Mail">
        </div>
      </form>
    </div>

    <form class="daftar">
      <button type="button" class="btn btn-primary">Daftar</button>
      <button type="button" class="btn btn-link">
        <a href="login.html">Login</a>
      </button>
    </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
