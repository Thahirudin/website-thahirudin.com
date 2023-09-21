<?php 
include "../app/koneksi.php";
include 'asset/function.php';
error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
  
    if (tambah($_POST) > 0) {
      echo "
          <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'home.php';
          </script>
      ";
    }
    else {
      echo "
          <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'home.php';
          </script>
      ";
    }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-primary" style="color: white;">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php" style="color: white;"><img src="asset/img/2.png" alt="Bootstrap" width="28" height="30"> Thahirudin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php" style="color: white;">Home</a>
        </li>
      </ul>
    </div>
    <div><?php echo $_SESSION['nama'] ?></div>
    <button type="submit" class="btn btn-danger" name="logout"><a class="nav-link active" href="logout.php">Logout</a></button>
  </div>
</nav>
<form class="input" action="" method="post">
  <h1>Tambah Pegawai</h1>

  <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="iduser" required >
      <label for="floatingInput" >Iduser</label>
  </div>
  <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nama" required >
      <label for="floatingInput">Nama</label>
  </div>
  <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="jabatan" required>
      <label for="floatingInput">Jabatan</label>
</div>
<div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="password" required>
      <label for="floatingInput">passsword</label>
</div>
<button type="submit" class="btn btn-success" name="submit">Input</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>