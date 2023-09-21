<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
include '../../app/koneksi.php';
$id = $_GET['idkonten'];
$query="DELETE from konten where idkonten ='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../home.php");
 ?>