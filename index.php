<?php include 'app/koneksi.php';



    $a = mysqli_query($koneksi, "select * from konten where idkategori != 4 ORDER BY idkonten DESC LIMIT 0,6"); 

    $c = mysqli_query($koneksi, "select * from konten where idkategori = 4 ORDER BY idkonten DESC LIMIT 0,6"); 



$b = mysqli_query($koneksi, "select * from kategori"); 

$i = 1;

?>



<?php include 'asset/header.html'; ?>

<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Thahirudin</title>
<meta name="description" content="Thahirudin.com adalah website yang berisi mengenai konten Pendidikan yang family friendly">
<meta name="keywords" content="Thahirudin, kesehatan, thahirudin.com, Teknologi, pemrograman">
<link rel="canonical" href="https://www.thahirudin.com" >

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="Thahirudin">
<meta itemprop="description" content="Thahirudin.com adalah website yang berisi mengenai konten Pendidikan yang family friendly">
<meta itemprop="image" content="https://thahirudin.com/asset/img/2.png">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://www.thahirudin.com">
<meta property="og:type" content="website">
<meta property="og:title" content="Thahirudin">
<meta property="og:description" content="Thahirudin.com adalah website yang berisi mengenai konten Pendidikan yang family friendly">
<meta property="og:image" content="https://thahirudin.com/asset/img/2.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Thahirudin">
<meta name="twitter:description" content="Thahirudin.com adalah website yang berisi mengenai konten Pendidikan yang family friendly">
<meta name="twitter:image" content="https://thahirudin.com/asset/img/2.png">

<style type="text/css">

      a{

        text-decoration: none;

      }

      .kontenn a{

        color: black;

        text-decoration: none;

      }

      .kontenn .card:hover{
        color: black;
        text-decoration: none;
        box-shadow: 10px 10px 15px rgba(0,0,0,.5);
      }

       

      /*untuk layar device berukuran sedang*/

      @media screen and (min-width: 768px) {

         .kontenn .card .card-body{

          height: 400px;

         }

      }

       

      /*untuk layar device berukuran besar*/

      @media screen and (min-width: 1050px) {

          .kontenn .card .card-body{
            height: 210px;
          }
         }

      }

</style>



<?php include 'asset/navbar.html'; ?>
<div itemprop="image" itemscope="itemscope" itemtype="http://schema.org/ImageObject">
<meta content="https://thahirudin.com/asset/img/2.png" itemprop="url"/> </div>

<div class="container-fluid konten" style="margin-top: 20px; margin-bottom: 20px;">

<div class="card mb-3">

  <div class="row g-0">

    <div class="col-md-2">

      <img src="asset/img/umri.png" width="100%" alt="logo-umri" class="img-fluid rounded-start">

    </div>

    <div class="col">

      <div class="card-body">

        <h5 class="card-title">Tentang UMRI</h5>

        <p class="card-text" style="text-align: justify;">Universitas Muhammadiyah Riau (disingkat <a href="https://umri.ac.id/" target="_blank">UMRI</a>) adalah sebuah perguruan tinggi swasta yang ada di Riau, Indonesia. Kampus utamanya terletak di jalan Tuanku Tambusai dan kampus 1 terletak di Jalan K.H Ahmad Dahlan No.88 Sukajadi.</p>

        <p style="text-align: justify;"><a href="https://umri.ac.id/" target="_blank">UMRI</a> merupakan kampus modern yang sangat mengikuti perkembangan dengan berbagai disiplin ilmu. <a href="https://umri.ac.id/" target="_blank">UMRI</a> telah melaksanakan model pendidikan yang dibutuhkan stakeholder. Sistem pendidikan menerapkan Student Center Learning (SCL) dengan sajian kurikulum yang mengarahkan mahasiswa untuk mampu menjadi pemikir dan praktisi dibidangnya.</p>

        <a href="about-umri.php"><button type="submit" class="btn btn-primary">Selengkapnya</button></a>

        

      </div>

    </div>

  </div>

</div>

        



  <div class="row">
    <div class="col-sm-8">
      <div class="rounded" style="margin-top: 20px; background-color: white; padding: 20px;">
        <center><h2>POSTINGAN</h2></center>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
          <?php while( $row = mysqli_fetch_assoc($a)) :?>
          <div class="col kontenn">
            <a href="konten.php?url=<?php echo $row["url"];  ?>">
            <div class="card">
              <img alt="<?php echo $row ["judul"]?>" src="admin/asset/img/<?php echo $row["gambar"];?>" height="180px" class="card-img-top">
              <div class="card-body">
                <div class="linkkonten">
                 <h5 class="card-title" style="font-weight: bold;" ><?php echo substr($row ["judul"], 0, 30) ?>...</h5>
                <p class="card-text" ><?php echo substr($row ["deskripsi"], 0, 90) ?>...</p>
                </div>            
              </div>
            </div>
            </a>
          </div>
          <?php $i++ ;?>
          <?php endwhile;?>
        </div>
        <center><a href="blog.php"><button type="submit" class="btn btn-success" style="margin-top: 10px;">Postingan Lainnya</button></a></center>
      </div>

      <div class="rounded" style="margin-top: 20px; background-color:white; padding: 20px">
        <center><h2>BERITA UMRI</h2></center>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php while( $row = mysqli_fetch_assoc($c)) :?>
          <div class="col kontenn">
            <a href="konten.php?url=<?php echo $row["url"];  ?>">
            <div class="card">
              <img alt="<?php echo $row ["judul"]?>" src="admin/asset/img/<?php echo $row["gambar"];?>" height="180px" class="card-img-top">
              <div class="card-body">
               <h5 class="card-title" style="font-weight: bold;" ><?php echo substr($row ["judul"], 0, 30) ?>...</h5>
                <p class="card-text" ><?php echo substr($row ["deskripsi"], 0, 90) ?>...</p>
              </div>
            </div>
            </a>
          </div>

          <?php $i++ ;?>

          <?php endwhile;?>

        </div>

        <center><a href="label.php?idkategori=4"><button type="submit" class="btn btn-success" style="margin-top: 10px;">Berita Lainnya</button></a></center>

      </div>

      

    </div>



   <?php include 'asset/sidebar.php'; ?>  

  </div>

</div>

 <?php include 'asset/footer.html'; ?>   

