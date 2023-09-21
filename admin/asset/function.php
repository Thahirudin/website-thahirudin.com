<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
include('../app/koneksi.php');
function tambahkonten($data){
	global $koneksi;
	date_default_timezone_set('Asia/Jakarta'); 
	$judul = htmlspecialchars($data['judul']);
	$idkategori = htmlspecialchars($data['idkategori']);
	$isi = $data['isi'];
	$tanggal = date("Y-m-d");
	$jam = date('G:i:s');
	$penulis = htmlspecialchars($data['penulis']);
	$gambar = htmlspecialchars($data['gambar']);
	$keyword = htmlspecialchars($data['keyword']);
	$deskripsi = htmlspecialchars($data['deskripsi']);
	$url = htmlspecialchars($data['url']);

	$query = "INSERT INTO konten (idkonten, idkategori, judul, isi, tanggal, penulis, gambar, deskripsi, keyword, jam, url) Values ('', '$idkategori', '$judul', '$isi', '$tanggal', '$penulis', '$gambar', '$deskripsi', '$keyword', '$jam', '$url')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}
function editkonten($data){
	global $koneksi;
	date_default_timezone_set('Asia/Jakarta'); 
	$idkonten   = htmlspecialchars($data['idkonten']);
	$judul = htmlspecialchars($data['judul']);
	$idkategori = htmlspecialchars($data['idkategori']);
	$isi = ($data['isi']);
	$tanggal = date("Y-m-d");
	$jam = date('G:i:s');
	$penulis = htmlspecialchars($data['penulis']);
	$keyword = htmlspecialchars($data['keyword']);
	$gambar = htmlspecialchars($data['gambar']);
	$deskripsi = htmlspecialchars($data['deskripsi']);

	$query = "UPDATE konten set judul = '$judul', idkategori = '$idkategori', isi = '$isi', penulis = '$penulis', gambar = '$gambar', deskripsi = '$deskripsi', keyword = '$keyword' where idkonten = '$idkonten' ";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}
function tambah($data){
	global $koneksi;
	$iduser = htmlspecialchars($data['iduser']);
	$nama = htmlspecialchars($data['nama']);

	$jabatan = htmlspecialchars($data['jabatan']);
	$password = htmlspecialchars($data['password']);
	$password1 = password_hash($password, PASSWORD_DEFAULT);
	$query = "INSERT INTO user (iduser, nama, jabatan, password) Values ('$iduser', '$nama', '$jabatan', '$password1')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

?>