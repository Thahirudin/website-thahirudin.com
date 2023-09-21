<?php include 'app/koneksi.php';?>

<?php include 'komentar/function.php'; ?>

<?php

  $d = mysqli_query($koneksi, "select * from kategori");



  if (isset($_POST['submit'])) {

  

    if (tambahkomen($_POST) > 0) {

      echo "

          <script>

            alert('Data Berhasil Ditambahkan!');

            document.location.href = 'konten.php?idkonten=$idkonten';

          </script>

      ";

    }

    else {

      echo "

          <script>

            alert('Data Gagal Ditambahkan!');

            document.location.href = 'konten.php?idkonten=$idkonten';

          </script>

      ";

    }

  }

  $b = mysqli_query($koneksi, "select * from kategori"); 

  $i=1;

?>

<?php include 'asset/header.html'; ?>

<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php echo $row ["deskripsi"]?>">

    <meta name="keyword" content="kesehatan, Thahirudin, teknologi, pemrograman">

    <meta name="author" content="Thahirudin">

    <title>Profil</title>

    <style type="text/css">

      

    </style>

<?php include 'asset/navbar.html'; ?>

<div class="container-fluid" style="margin-top: 20px;">

  <div class="row">

    <div class="col-sm-8">

      <div style="background-color: white; padding: 20px;" class="rounded card mb-3">

       <center> <h1>Profil Saya</h1></center>

        <div class="row">

          <div class="col-sm-2" style="padding-top: 40px;">

            <img src="https://www.thahirudin.com/asset/img/DSC_0006.jpg" width="100%">

          </div>

          <div class="col table-responsive">

            <table class="table">

              <tbody>

                <tr>

                  <th>Nama</th>

                  <td> : </td>

                  <td>Thahirudin</td>

                </tr>

                <tr>

                  <th>Usia</th>

                  <td> : </td>

                  <td>19 Tahun</td>

                </tr>

                <tr>

                 <th rowspan="3" valign="middle">Pendidikan</th>

                  <td rowspan="3" valign="middle"> : </td>

                  <ul><td><li>SDN 024 Tanah Merah</li></td>

                  

                </tr>

                <tr>

                  <td><li>SMP IT Al-Husna</li></td>

                </tr>

                <tr>

                  <td><li>SMK Bina insan</li></td>

                </tr>

                </ul>

                <tr>

                  <th>Pendidikan Saat Ini</th>

                  <center><td> : </td></center>

                  <td>Universitas Muhammaadiyah Riau</td>

                </tr>

                <tr>

                  <th>Fakultas</th>

                  <td> : </td>

                  <td>Ilmu Komputer</td>

                </tr>

                <tr>

                  <th>Jurusan</th>

                  <td> : </td>

                  <td>Teknik Informatika</td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>

        

        

      </div>

    </div>

<?php include 'asset/sidebar.php'; ?>  

  </div>

</div>

<?php include 'asset/footer.html'; ?> 