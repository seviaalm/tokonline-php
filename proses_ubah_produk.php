<?php

    if($_POST){
        $nama_produk=$_POST['nama_produk'];
        $deskripsi=$_POST['deskripsi'];
        $harga=$_POST['harga'];
        $foto_produk=$_POST['foto_produk'];

        if(empty($nama_produk)){
            echo "<script>alert('nama produk tidak boleh kosong');location.href='ubah_produk.php';</script>";
        } elseif(empty($deskripsi)){
            echo "<script>alert('deskripsi tidak boleh kosong');location.href='ubah_produk.php';</script>";
        } elseif(empty($harga)){
            echo "<script>alert('harga tidak boleh kosong');location.href='ubah_produk.php';</script>";
        } else {
            include "toko.php";

                $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."', 
                deskripsi='".$deskripsi."', harga='".$harga."' ,foto_produk='".$foto_produk."' WHERE nama_produk='".$nama_produk."'") 
                or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
                } else {
                    echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?nama_produk=".$nama_produk."';</script>";
                }
        }
    }
?>