<?php
//require 'functions.php';
if (isset($_POST["cari"])) { 
header("../index.php");

}

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
   <header>
      <div class="cont">
      <span class="fa fa-bars menu-icon"></span>
      <div class="header-left">
         <img class="logo" src="images/siranaplakes1.png" style="width: 60px;height:60px; float: left; padding-left: 0%;"  alt="#">
      </div>
      <div class="header-right">
         <a href="#">Lessons</a>
         <a href="">Sign in</a>
         <a href="#" class="login">Log in</a>
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
                           <option value="0000">-- PILIH --</option>
                           <option value="1111">Aceh</option>
                           <option value="2222">Sumatera Utara</option>
                           <option value="3333">Sumatera Barat</option>
                           <option value="4444">R i a u</option>
                        </select>
                     </div>
                     <div class="col-md-6" >
                        <h3>Pilih Kabupaten/Kota</h3>
                        <select class="contactus" placeholder="Pilih Kabupaten/Kota" type="type" name="Kabupaten/Kota" style="color: 	#000000aa; font-size: 18px; letter-spacing: 1px; font-family: Roboto, Helvetica, Arial, sans-serif;">
                           <option value="0000" >-- PILIH --</option>
                           <option value="1111">Banda Aceh</option>
                           <option value="2222">Lhokseumawe</option>
                           <option value="3333">Bireun</option>
                           <option value="4444">Meulaboh</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <h3>Pilih Kecamatan</h3>
                        <select class="contactus" placeholder="Pilih Kecamatan" type="type" name="Kecamatan" style="color: 	#000000aa; font-size: 18px; letter-spacing: 1px; font-family: Roboto, Helvetica, Arial, sans-serif;">
                           <option value="0000">-- PILIH --</option>
                           <option value="1111">Darussalam</option>
                           <option value="2222">Syiah Kuala</option>
                           <option value="3333">Baiturrahman</option>
                           <option value="4444">Lueng Bata</option>
                        </select>                         
                     </div>
                     <div class="btn-wrapper">
                        <button class="btn signup" style="width: 100%; border: transparent; border-radius: 15px; padding: 15px;" ><a href="../index.php" name="cari" style=" width: 100%; color:white;">CARI RUMAH SAKIT</a>
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

