<?php
   header('Content-type: application/xml');
   include "app/koneksi.php"; //nama file koneksi database Anda
   $query    =mysqli_query($koneksi, "SELECT * FROM konten");
   echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
   echo "<urlset xmlns='https://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";
   echo "
        <url>
            <loc>https://www.thahirudin.com</loc>
            <lastmod>2022-11-14T16:02:15+00:00</lastmod>
            <priority>1.00</priority>
        </url>
        <url>
            <loc>https://www.thahirudin.com/about.php</loc>
            <lastmod>2022-11-14T16:02:15+00:00</lastmod>
            <priority>1.00</priority>
        </url>";

   while($data = mysqli_fetch_array($query)){
       echo "<url>";
       echo "<loc>http://thahirudin.com/konten.php?idkonten=".$data['idkonten']."</loc>";
       echo "<lastmod>".$data['tanggal']."</lastmod>";
       echo "<priority>1.00</priority>";
       echo "</url>";
   }
   echo "</urlset>";
?>