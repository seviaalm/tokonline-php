<?php 
    include "header.php";
?>

<h2>Daftar Produk</h2>

<div class="row">

    <?php 
    include "toko.php";

    $qry_produk=mysqli_query($conn,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
    ?>
        <div class="col-md-3">
            <div class="card" >
                <img src="foto/<?=$dt_produk['foto_produk']?>" class="card-img-top">

                <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,30)?></p>
                <a href="Beli.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</div>

<?php 
    include "footer.php";
?>
