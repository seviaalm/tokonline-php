<?php 
    session_start();
    include "toko.php";

    $cart=@$_SESSION['cart'];
    if(count($cart)>0){

        $id_petugas = 5;
        $tgl = date('Y-m-d');
        mysqli_query($conn,"INSERT INTO `transaksi` (`id_pelanggan`, `id_petugas`, `tgl_transaksi`) 
        VALUES ('".$_SESSION['id_pelanggan']."', '".$id_petugas."', '".$tgl."')");
        
        $id=mysqli_insert_id($conn);
        
        foreach ($cart as $key_produk => $val_produk) {
            $qry_harga = mysqli_query($conn,"select * from produk 
            where id_produk = '".$val_produk['id_produk']."'");
            $data_harga=mysqli_fetch_array($qry_harga);
            $harga = $data_harga['harga'];
            $subtotal = $val_produk['qty'] * $harga;

            mysqli_query($conn,"INSERT INTO `detail_transaksi` ( `id_transaksi`, `id_produk`, `qty`, `subtotal`) 
            VALUES ('".$id."', '".$val_produk['id_produk']."', '".$val_produk['qty']."', '".$subtotal."')");
        }

        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli produk");location.href="history.php"</script>';
    }
?>