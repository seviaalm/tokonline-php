<?php 

session_start();
    if($_SESSION['status_login']!=true){
        header('location: login_pelanggan.php');
    }

?>

<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">TOKO ONLINE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="page_produk.php">Produk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="history.php">Transaksi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout_pelanggan.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container bg-light rounded" style="margin-top:10px">