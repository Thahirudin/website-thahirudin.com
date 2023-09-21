<?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}
include '../../app/koneksi.php';
$idkonten   = $_GET['idkonten'];
$a = mysqli_query($koneksi, "select * from konten where idkonten = '$idkonten' ");
$row = mysqli_fetch_assoc($a);
$i = 1;
include '../asset/function.php';
if (isset($_POST['submit'])) {
  
    if (editkonten($_POST) > 0) {
      echo "
          <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = '../home.php';
          </script>
      ";
    }
    else {
      echo "
          <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = '../home.php';
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
    <a class="navbar-brand" href="https://www.thahirudin.com/admin/home.php" style="color: white;">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../home.php" style="color: white;">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <form method="post">
    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="idkonten" value="<?php echo $row["idkonten"]?>" hidden>
    <div class="form-floating mb-3">

      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="judul" value="<?php echo $row["judul"]?>">
      <label for="floatingInput">judul</label>
    </div>
    <div class="form-floating mb-3">
      <textarea name="isi" id="kritiksaran" class="col-12"><?php echo $row['isi'];?></textarea>
    </div>
    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupFile01" >Gambar Utama</label>
      <input type="file" class="form-control"  name="gambar"><?php echo $row["gambar"]?></input>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="penulis" value="<?php echo $row["penulis"]?>">
      <label for="floatingInput">Penulis</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="deskripsi" value="<?php echo $row["deskripsi"]?>">
      <label for="floatingInput">Deskripsi</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="keyword" value="<?php echo $row["keyword"]?>">
      <label for="floatingInput">Keyword</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="idkategori" value="<?php echo $row["idkategori"]?>">
      <label for="floatingInput">Kategori</label>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
<script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
<script type="text/javascript">
     CKEDITOR.replace( 'kritiksaran' );
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>