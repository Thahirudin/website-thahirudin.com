 <?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
include '../app/koneksi.php';
$a = mysqli_query($koneksi, "select * from konten");
$i = 1;

?>
 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link rel="icon" type="image/png" href="../asset/img/2.png" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

     <style type="text/css">

     </style>
 </head>

 <body class="bg-light">
     <nav class="navbar navbar-expand-lg bg-primary" style="color: white;">
         <div class="container-fluid">
             <a class="navbar-brand" href="home.php" style="color: white;"><img src="../asset/img/2.png" width="28"
                     height="30"> Thahirudin</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="home.php" style="color: white;">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="tambahpenulis.php"
                             style="color: white;">Tambah Penulis</a>
                     </li>
                 </ul>
             </div>
             <div><?php echo $_SESSION['nama'] ?></div>
             <button type="submit" class="btn btn-danger" name="logout"><a class="nav-link active"
                     href="logout.php">Logout</a></button>
         </div>
     </nav>

     <div class="container" style="margin-top: 20px;">
         <button type="submit" class="btn btn-primary" name="tambah"><a class="nav-link active"
                 href="home/tambah.php">Tambah</a></button>
         <?php while( $row = mysqli_fetch_assoc($a)) :?>
         <div class="row" style="background-color: white; margin-top: 20px; padding: 20px;">

             <div class="col-10">
                 <h3><?php echo $row ["judul"]?></h3>
             </div>
             <div class="col-2"><a href="home/edit.php?idkonten=<?php echo $row["idkonten"]?>">edit</a> | <a
                     href="home/hapus.php?idkonten=<?php echo $row["idkonten"]?>">Hapus</a></div>

         </div>
         <?php $i++ ;?>
         <?php endwhile;?>
     </div>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
     </script>
 </body>

 </html>