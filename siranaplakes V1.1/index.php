<?php
require 'functions.php';
if (isset($_POST ["cari"])){
   // header('Location: login.php');
}

$db = mysqli_connect("localhost", "root", "", "siranaplakes2");
if (!$db) {
	die ('Gagal terhubung kedatabases: ' . mysqli_connect_error());	
}
//array kota
$aceh =["Banda Aceh", "Lhokseumawe", "Bireun", "Meulaboh",];
$sumut = ["Asahan", "Batu Bara", "Karo", "Mandailing Natal"];
$sumbar =["	Kabupaten Agam", "Dharmasraya", "Pasaman Barat", "Sijunjung"];
$riau =["Bengkalis", "Indragiri Hilir", "Kampar", "Pelalawan"];

//array kecamatan /kab.aceh
$banda=["Baiturrahman", "Banda Raya", "Kuta Alam", "Lueng Bata"];
$lhokseumawe =["Banda sakti", "Muara Dua", "Dewantara", "Muara Batu"];
//array kecamatan sumut
$asahan =["Gedangan", "Pulo Bandring", "Suka Damai", "Taman Sari"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SIRANAPLAKES</title>
<link href="" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="login/stylesheet.css">
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="shortcut icon" href="favicon.ico" >
<link rel="icon" href="login/images/siranaplakes.png" type="image/png"/>
</head>
<body>
<header style=" box-shadow: 0 0.5px #999;">
    <div class="container" >
        <span class="fa fa-bars menu-icon"></span>
        <div class="header-left">
        <img class="logo" src="login/images/siranaplakes1.png" style="width: 60px;height:60px; float: left; padding-left: 0%;"  alt="#">
        </div>
        <div class="header-right" style="margin: 30px; padding:10px;">
        <a style="color:green; font-size: 20px; " href="#">Beranda</a>
        <a style="color:green; font-size: 20px;" href="#">Hubungi Kami</a>
        <a style="color:green; font-size: 20px;" href="../index.php" class="login">Login</a>
        </div>
    </div>
    </header>
<div class="top-wrapper">
    <div class="container">
    <h1>Sistem Informasi Ruang Rawat Inap Layanan Kesehatan</h1> <br>
    <p> Aplikasi Website Pengecek Ketersedian Ruang Rawat Inap Secara Realtime di Pelayanan Kesehatan Sekitar Anda.</p>
    <div class="top-wrapp">
        <section class="banner_main">
        <div class="contain">
        <div class="row d_flex">
            <div class="col-md-6">
            </div>
            <div class="col-md-6  col-md-12" >
            <form id="request" action="" method="post" class="main_form">
                <div class="row">
                    <div class="col-md-6 ">
                        <h3>Pilih Provinsi</h3>
                        <select class="contactus" placeholder="Pilih Provinsi" type="type" name="Provinsi" style="color: 	#000000aa; font-size: 18px; letter-spacing: 1px; font-family: Roboto, Helvetica, Arial, sans-serif;">
                        <option value="0000"disabled selected>-- PILIH --</option>
                        <?php
                            $sql= mysqli_query($db, "SELECT * FROM provinsi");
                            $data=[];
                            while(($v = mysqli_fetch_assoc($sql))){
                            $data[]=$v;
                            $d3=$data;

                            ?>
                            <?php foreach($d3 as $p) ?>

                            <option value=""><?php echo $p['provinsi']; ?></option>
                            <?php 
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6" >
                        <h3>Pilih Kabupaten/Kota</h3>
                        <select class="contactus"  type="type" name="Kabupaten/Kota" style="color: 	#000000aa; font-size: 18px; letter-spacing: 1px; font-family: Roboto, Helvetica, Arial, sans-serif;">
                        <option  value="0000" disabled selected >-- PILIH --</option>
                        <?php for($a=0; $a < 4 ; $a++) {?>
                        <option value="4444"><?php echo $aceh[$a]; ?></option>
                        <?php } ?>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <h3>Pilih Kecamatan</h3>
                        <select class="contactus" placeholder="Pilih Kecamatan" type="type" name="Kecamatan" style="color: 	#000000aa; font-size: 18px; letter-spacing: 1px; font-family: Roboto, Helvetica, Arial, sans-serif;">
                        <option value="0000"disabled selected>-- PILIH --</option>
                        <?php for($a=0; $a < 4 ; $a++) {?>
                        <option value="4444"><?php echo $banda[$a]; ?></option>
                        <?php } ?>
                        </select>                         
                    </div>
                    <div class="btn-wrapper">
                        <button class="btn signup" style="width: 100%; border: transparent; border-radius: 15px; padding: 15px;" ><a href="login.php" name="cari" style=" width: 100%; color:white;">CARI RUMAH SAKIT</a>
                        </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
    </div>
</div>
</footer>
</body>
</html>

