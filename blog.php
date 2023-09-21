<?php include 'app/koneksi.php';



    $a = mysqli_query($koneksi, "select * from konten where idkategori != 4 ORDER BY idkonten DESC");   

$b = mysqli_query($koneksi, "select * from kategori"); 

$i = 1;

?>

<?php include 'asset/header.html'; ?>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
    content="Thahirudin.com adalah website yang berisi mengenai konten Pendidikan yang family friendly">
<meta name="keywords" content="kesehatan, Thahirudin, teknologi, pemrograman">
<meta name="author" content="Thahirudin">
<title>Thahirudin</title>
<style type="text/css">
a {

    text-decoration: none;

}

.kontenn a {

    color: black;

    text-decoration: none;

}

.kontenn .card:hover {
    color: black;
    text-decoration: none;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, .5);
}

/*untuk layar device berukuran sedang*/
@media screen and (min-width: 768px) {
    .kontenn .card .card-body {
        height: 400px;
    }
}

/*untuk layar device berukuran besar*/
@media screen and (min-width: 1050px) {
    .kontenn .card .card-body {
        height: 210px;
    }
}
</style>

<?php include 'asset/navbar.html'; ?>

<div class="container-fluid konten" style="margin-top: 20px; margin-bottom: 20px;">

    <div class="row">

        <div class="col-sm-8">

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php while( $row = mysqli_fetch_assoc($a)) :?>
                <div class="col kontenn">
                    <a href="konten.php?url=<?php echo $row["url"];  ?>">
                        <div class="card">
                            <img src="admin/asset/img/<?php echo $row["gambar"];?>" height="180px" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold;">
                                    <?php echo substr($row ["judul"], 0, 30) ?>...</h5>
                                <p class="card-text"><?php echo substr($row ["deskripsi"], 0, 90) ?>...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $i++ ;?>
                <?php endwhile;?>
            </div>

        </div>

        <?php include 'asset/sidebar.php'; ?>

    </div>

</div>

<?php include 'asset/footer.html'; ?>

<?php echo "Bapak kau";?>