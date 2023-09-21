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
    <title>About</title>
    <style type="text/css">
      
    </style>
<?php include 'asset/navbar.html'; ?>
<div class="container-fluid" style="margin-top: 20px;">
  <div class="row">
    <div class="col-sm-8">
      <div>
        <div class="mb-3 rounded" style="background-color: white; padding: 20px;">
          <h1 style="text-align: center;">About</h1>
          <span></span>
          <strong>Thahirudin</strong>
          <center><img src="asset/img/1.png"width="100%" height="auto"></center>
          <div>
          <p>Assalamualaikum</p>
            <p>Halo Semuanya seperti kata pepatah tak kenal maka tak sayang. Perkenalkan nama saya adalah Thahirudin. Saya adalah Mahasiswa dari Universitas terfavorit di Provinsi Riau yaitu Universitas Muhammadiyah Riau.</p>
            <p>Website ini merupakan salah satu tugas dari Mata Kuliah Interaksi Manusia dan Komputer. website ini akan membahas seputar teknologi, program, game dan kesehatan. Saya berharap dengan adanya website ini dapat bermanfaat bagi saya maupun kita semua.</p>
            <p>Salam Teknologi</p>
            <p>Wassalam</p>>
          </div>
        </div>
      </div>
    </div>
<?php include 'asset/sidebar.php'; ?>  
  </div>
</div>
<?php include 'asset/footer.html'; ?> 