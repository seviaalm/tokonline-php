<?php

if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $foto_pelanggan=$_POST['foto_pelanggan'];

    if(empty($id_pelanggan)){
        echo "<script>alert('Id Pelanggan tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    } elseif(empty($nama)){
        echo "<script>alert('Nama Pelanggan tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    } elseif(empty($foto_pelanggan)){
        echo "<script>alert('Foto tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    } else {
        include "toko.php";
            $update=mysqli_query($conn,"UPDATE `pelanggan` SET  `nama`='".$nama."',`alamat`='".$alamat."',`telp`='".$telp."',`username`='".$username."',`password`='".md5($password)."',`foto_pelanggan`='".$foto_pelanggan."' WHERE `id_pelanggan`=".$id_pelanggan." ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        }
}


?>