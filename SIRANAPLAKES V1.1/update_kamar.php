<?php 
require 'functions.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Update Kamar Kosong</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="icon" href="images/siranaplakes.png" type="image/png"><br><br><br>
</head>
<body>

<header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
            <div class="row">
                    <div class="full">
                    <body>
                        <div class="container">
                            <span class="fa fa-bars menu-icon"></span>
                            <div class="header-right">
                                <a href="404.html">About us</a>
                                <a href="index.php" class="login">Log out</a>
                                <a href="404.html">Contact</a>
                            </div>
                            <img src="images/siranaplakes.png"style="width: 115px;px;height:115px; float: left;" aligh="middle" alt="#" >
                            
                        </div>
                    </body>
            </div>
        </div>
    </div>
</div>
</header>
<div class="letak"><br>
<center>
    <b>
        <p>Rumah Sakit Umum Daerah Doktor Zainal Abidin.</p>
        <p>Alamat : jln.Daud Beureueh No.108B, Banda Aceh.</p>
        <p>Telpon : 065134271</p>
    </b>
    <div class="cari_rs">
        <a href="halaman_perawat.php"><button class="button">Up Date</button></a>
    </div> 
    <section class="hasil">
            <b>Kelas 1</b>
            <p>Ruang 1 ARAFAH 3</p>
            <p>Tersedia Kamar : 1</p>
            <p>Bad Kosong : 3</p>
            <p>Info : Diupdate barusaja</p>
            <button class="third" onClick="alert('Pilihan Sukses!! SILAHKAN TEKAN DAFTAR')">Pilih</a></button>
            <button class="third" href="hapus.php" onclick = "return confirm('Yakin Data Akan Dihapus');">HAPUS</a></button>
            <br> <hr>
            <b>Kelas 2</b>
            <p>Ruang 3 AQSA 2</p>
            <p>Tersedia Kamar : 1</p>
            <p>Bad Kosong : 3</p>
            <p>Info : Diupdate 13 Menit Lalu</p>
            <button class="third" onClick="alert('Pilihan Sukses!! SILAHKAN TEKAN DAFTAR')">Pilih</a></button>
            <button class="third" href="hapus.php" onclick = "return confirm('Yakin Data Akan Dihapus');">HAPUS</a></button>
            <br> <hr>
            <b>Kelas 1</b>
            <p>Ruang 2 RAUDHOH 2</p>
            <p>Tersedia Kamar : 2</p>
            <p>Bad Kosong : 4</p>
            <p>Info : Diupdate 38 Menit Lalu</p>
            <button class="third" onClick="alert('Pilihan Sukses!! SILAHKAN TEKAN DAFTAR')" >Pilih</a></button>
            <button class="third" href="hapus.php" onclick = "return confirm('Yakin Data Akan Dihapus');">HAPUS</a></button>
        </section>
        </center>
    </div>
</body>
</html>