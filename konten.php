<?php include 'app/koneksi.php';?>

<?php include 'komentar/function.php'; ?>

<?php

if (!isset($_GET['idkonten'])) {

  $url = $_GET['url'];

  $a = mysqli_query($koneksi, "select * from konten where url = '$url'");

  $row = mysqli_fetch_assoc($a);

  $idkonten = $row["idkonten"];

} else {

  $idkonten = $_GET['idkonten'];

  $a = mysqli_query($koneksi, "select * from konten where idkonten = '$idkonten'");

  $row = mysqli_fetch_assoc($a);
  $url = $row["url"];

}
  $idkategori =  $row ["idkategori"];
  $d = mysqli_query($koneksi, "select * from kategori where idkategori = '$idkategori'");
  $row1 = mysqli_fetch_assoc($d);
  $c = mysqli_query($koneksi, "select * from komentar where idkonten = '$idkonten'");
  $b = mysqli_query($koneksi, "select * from kategori");
  if (isset($_POST['submit'])) {
    if (tambahkomen($_POST) > 0) {
      echo "
          <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'konten.php?url=$url';
          </script>
      ";
    }
    else {
      echo "
          <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'konten.php?url=$url';
          </script>
      ";
    }
  }
  $i=1;
?>
<?php include 'asset/header.html'; ?>
<link rel="canonical" href="https://www.thahirudin.com/konten.php?url=<?php echo $url ?>" >
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $row ["judul"]?></title>
<meta name="description" content="<?php echo $row ["deskripsi"]?>">
<meta name="keywords" content="kesehatan, Thahirudin, teknologi, pemrograman, <?php echo $row ["keyword"]?>">
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="<?php echo $row ["judul"]?>">
<meta itemprop="description" content="<?php echo $row ["deskripsi"]?>">
<meta itemprop="image" content="https://www.thahirudin.com/admin/asset/img/<?php echo $row["gambar"];?>">
<meta name="author" content="Thahirudin">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://www.thahirudin.com/konten.php?url=<?php echo $url ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $row ["judul"]?>">
<meta property="og:description" content="<?php echo $row ["deskripsi"]?>">
<meta property="og:image" content="https://www.thahirudin.com/admin/asset/img/<?php echo $row["gambar"];?>">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $row ["judul"]?>">
<meta name="twitter:description" content="<?php echo $row ["deskripsi"]?>">
<meta name="twitter:image" content="https://www.thahirudin.com/admin/asset/img/<?php echo $row["gambar"];?>">


    

    <style type="text/css">
      .kontenn a{
        color: blue;
        text-decoration: none;
        font-weight: bold;
      }
      

    @media screen and (min-width: 360px) {

   .isi img{

            width: 100%;

            height: auto;

        }

}

@media screen and (min-width: 550px) {

   .isi img{

            width: 70%;

            height: auto;

        }

}

@media screen and (min-width: 800px) {

   .isi img{

            width: 70%;

            height: auto;

        }

}

        

    </style>

<?php include 'asset/navbar.html'; ?>

<div class="container-fluid" style="margin-top: 20px;">

  <div class="row">

    <div class="col-sm-8">

    	<div>

    		<div class="mb-3 rounded" style="background-color: white; padding: 30px;">

    			<h1 style="text-align: center; font-weight: bold;"><?php echo $row ["judul"]?></h1>

    			<span class="text-muted"><?php echo $row ["tanggal"] . " ".$row ["jam"]; ?></span>

          <strong class="text-muted"><?php echo $row ["penulis"]?></strong>

    			<center><img src="admin/asset/img/<?php echo $row["gambar"];?>" width="100%" height="auto"></center>

          <div class="isi kontenn text-break" style="text-align: justify;">

          <?php echo $row ["isi"]?>

        </div>

    		</div>

        <div class="container mb-3" style="background-color: white; padding: 20px">

          <p>Share:</p>

            <a rel='dofollow' href='https://api.whatsapp.com/send?text=https://www.thahirudin.com/konten.php?url=<?php echo $url ?>'>

            <img src='https://syam.eu.org/icon/wa.jpg' alt='' width='40' height='40'></a>

            <a rel='dofollow' href='https://www.facebook.com/sharer.php?u=https://www.thahirudin.com/konten.php?url=<?php echo $url ?>'>

            <img src='https://syam.eu.org/icon/fb.jpg' alt='' width='40' height='40'></a>

        </div>

        <div class="card mb-3">

          <div class="card-header" style="background-color: #BF0BDF; color: white;">

            Kategori

          </div>

          <div class="card-body">

            <button type="button" class="btn" style="background-color: #BF0BDF; color: white;"><?php echo $row1 ["nama"]?></button>

          </div>

        </div>



        <div class="card mb-3">

          <div class="card-header" style="background-color: #BF0BDF; color: white;">

            Komentar

          </div>

          <div class="card-body">

            <?php while( $row2 = mysqli_fetch_assoc($c)) :?>

              <div>

                <strong><?php echo $row2 ["nama"], " : ";?></strong>

                <span><?php echo $row2 ["komentar"];?></span>

              </div>

            <?php endwhile;?>

          </div>

        </div>



        <div class="card mb-3">



          <div class="card-header" style="background-color: #BF0BDF; color: white;">

            Tulis Komentar

          </div>

          <form method="post">

            <div class="card-body">

              <div class="form-floating mb-3">

                <input type="text" class="form-control" id="floatingInput" placeholder="Tohir" name="nama" required autocomplete="off">

                <label for="floatingInput">Nama</label>

              </div>

              <div class="form-floating">

                <span class="input-group-text" style="background-color: #BF0BDF; color: white;" >Kolom Komentar</span>

                <textarea rows="10" class="col-12" name="komentar" required></textarea>

              </div>

              <div class="form-floating mb-3" hidden>

                <input type="text" class="form-control" id="floatingInput" placeholder="Tohir" name="idkonten" value="<?php echo $row ["idkonten"]; ?>"></input>

                <label for="floatingInput">IDkonten</label>

              </div>

              <div>

                <button type="submit" class="btn btn-success" name="submit">Submit</button>

              </div>

              

            </div>

          </form>

        </div>

    	</div>

    </div>

<?php include 'asset/sidebar.php'; ?>  

  </div>

</div>

<?php include 'asset/footer.html'; ?> 