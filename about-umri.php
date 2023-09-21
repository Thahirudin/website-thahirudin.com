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
    <meta name="description" content="Universitas Muhammadiyah Riau (disingkat UMRI) adalah sebuah perguruan tinggi swasta yang ada di Riau, Indonesia. Kampus utamanya terletak di jalan Tuanku Tambusai dan kampus 1 terletak di Jalan K.H Ahmad Dahlan No.88 Sukajadi.">
    <meta name="keywords" content="kesehatan, Thahirudin, teknologi, pemrograman, UMRI">
    <meta name="author" content="Thahirudin">
    <title>About UMRI</title>

    <style type="text/css">

      .kontenn a{

        text-decoration: none;

        font-weight: bold;

      }

    </style>

<?php include 'asset/navbar.html'; ?>

<div class="container-fluid" style="margin-top: 20px;">

  <div class="row">

    <div class="col-sm-8">

      <div>

        <div class="mb-3 rounded kontenn" style="background-color: white; padding: 30px;">

          <h1 style="text-align: center;">About UMRI</h1>

          <span></span>

          <strong>Thahirudin</strong>

          <center><img src="asset/img/umri.png" width="100%" height="auto"></center>

          <div style="text-align: justify;">



          <p>Universitas Muhammadiyah Riau (disingkat <a href="https://umri.ac.id/" target="_blank">UMRI</a>) adalah sebuah perguruan tinggi swasta yang ada di Riau, Indonesia. Kampus utamanya terletak di jalan Tuanku Tambusai dan kampus 1 terletak di Jalan K.H Ahmad Dahlan No.88 Sukajadi. <a href="https://umri.ac.id/" target="_blank">UMRI</a> merupakan kampus modern yang sangat mengikuti perkembangan dengan berbagai disiplin ilmu. <a href="https://umri.ac.id/" target="_blank">UMRI</a> telah melaksanakan model pendidikan yang dibutuhkan stakeholder. Sistem pendidikan menerapkan Student Center Learning (SCL) dengan sajian kurikulum yang mengarahkan mahasiswa untuk mampu menjadi pemikir dan praktisi dibidangnya.</p>

          <h2>SEJARAH</h2>

          <p>Muhammadiyah sebagai pilar bangsa yang mempunyai komitmen untuk mewujudkan masyarakat yang adil dan makmur berdasarkan Pancasila dan UUD 1945 yang diridhai Allah SWT, sejak awal telah menjadikan pendidikan sebagai ujung tombak pembangunan bangsa.</p>

          <p>Kiprah Muhammadiyah dalam dunia pendidikan secara nasional telah dibuktikan dengan berdirinya lembaga-lembaga pendidikan mulai dari pendidikan pra-sekolah hingga perguruan tinggi.</p>

          <p>Dengan komitmen dan kesadaran yang mendalam ini, maka pada tanggal 23 Juli 1993, Persyarikatan Muhammadiyah Wilayah Riau mendirikan Akademi Teknologi Otomotif (ATOM) yang selanjutnya pada tanggal 17 Juli 1994 didirikan pula Akademi Perawatan (AKPER) Muhammadiyah dan pada tanggal 5 November 1998 berdiri Akademi Keuangan dan perbankan Muhammadiyah (AKPM) yang berkedudukan di jalan KH. Ahmad Dahlan No. 88 Sukajadi, Pekanbaru.</p>

          <p>Dari ketiga akademi tersebut, peningkatannya terus diupayakan oleh Pimpinan Wilayah Muhammadiyah Riau agar dapt menjadi sebuah universitas dengan harapan dapat meningkatkan amal usaha pendidikannya sebagai salah satu pilar dakwah amar ma’ruf nahi mungkar melalui penyelenggaraan pendidikan, khususnya di Provinsi Riau.</p>

          <p>Tepat pada tanggal 5 Juni 2008, cita-cita Pimpinan Wilayah Muhammadiyah Riau untuk mendirikan Universitas Muhammadiyah Riau (<a href="https://umri.ac.id/">UMRI</a>) akhirnya terwujud berdasarkan SK Mendiknas RI No. 94/D/O/2008 yang merupakan universitas Muhammadiyah ke-39 di Indonesia. Sejak awal berdirinya, <a href="https://umri.ac.id/" target="_blank">UMRI</a> memiliki 5 fakultas yaitu: Fakultas Teknik Fakultas Ekonomi Fakultas Matematika Ilmu Pengatahuan Alam dan Kesehatan Fakultas Ilmu Komputer Fakultas Ilmu Komunikasi</p>

          <h2>FAKULTAS</h2>

          <p>Tepat pada tanggal 5 Juni 2008, cita-cita Pimpinan Wilayah Muhammadiyah Riau untuk mendirikan Universitas Muhammadiyah Riau (<a href="https://umri.ac.id/" target="_blank">UMRI</a>) akhirnya terwujud berdasarkan SK Mendiknas RI No. 94/D/O/2008 yang merupakan universitas Muhammadiyah ke-39 di Indonesia.</p>

          <p>Sejak awal berdirinya, <a href="https://umri.ac.id/" target="_blank">UMRI</a> saat ini memiliki 8 [1]fakultas yaitu:</p>

          <ul>

            <li>Fakultas Teknik</li>

            <li>Fakultas Matematika Ilmu Pengatahuan Alam dan Kesehatan</li>

            <li>Fakultas Ekonomi dan Bisnis</li>

            <li>Fakultas Ilmu Komputer</li>

            <li>Fakultas Ilmu Komunikasi</li>

            <li>Fakultas Keguruan dan Ilmu Pendidikan</li>

            <li>Fakultas Hukum</li>

            <li>Fakultas Studi Islam</li>

          </ul>

          <h2>Visi dan Misi</h2>

          <p>Azas <a href="https://umri.ac.id/" target="_blank">UMRI</a> berasaskan Al-Quran, As-Sunnah, Pancasila dan Undang-Undangan Dasar 1945. Tujuan Menyiapkan peserta didik menjadi sarjana muslim yang beriman dan bertaqwa, bermarwah dan bermartabat yang mempunyai kemampuan akademik dan profesional serta beramal menuju terwujudnya masyarakat utama, adil dan makmur yang di ridhai Allah SWT. Mengamalkan, mengembangkan, menciptakan dan menyebarluaskan ilmu pengetahuan, teknologi dan kesenian dalam rangka memajukan islam dan meningkatkan kesejahteraan umat manusia.</p>

          <h3>Visi</h3>

          <p>Menjadikan Universitas Muhammadiyah Riau sebagai lembaga pendidikan tinggi yang bermarwah dan bermartabat dalam menghasilkan sumber daya manusia yang menguasai IPTEKS dengan landasan IMTAQ tahun 2030.</p>

          <h3>Misi</h3>

          <ul>

            <li>Mewujudkan keunggulan bidang pendidikan, pengajaran, penelitian, pengabdian kepada masyarakat dan Al-Islam Kemuhammadiyahan.</li>

            <li>Menguasai dan memanfaatkan Ilmu Pengetahuan dan Teknologi dalam pendidikan, pengajaran, penelitian, pengabdian kepada masyarakat dan Al-Islam Kemuhammadiyahan.</li>

            <li>Menyelenggarakan pendidikan, pengajaran, penelitian, pengabdian kepada masyarakat yang dilandasi etika, nilai dan moral Islami.</li>

            <li>Menciptakan iklim kondusif untuk tumbuh dan berkembangnya budaya mutu, pengembangan IPTEK dan implementasi iman dan taqwa</li>

          </ul>

          </div>

        </div>

      </div>

    </div>

<?php include 'asset/sidebar.php'; ?>  

  </div>

</div>

<?php include 'asset/footer.html'; ?> 