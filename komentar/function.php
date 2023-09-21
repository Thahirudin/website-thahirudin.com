<?php 
function tambahkomen($data){
	global $koneksi;
	$komentar = htmlspecialchars($data['komentar']);
	$nama = htmlspecialchars($data['nama']);

	$idkonten = htmlspecialchars($data['idkonten']);
	
	$query = "INSERT INTO komentar (idkomentar, nama, komentar, idkonten) Values ('', '$nama', '$komentar', '$idkonten')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

?>