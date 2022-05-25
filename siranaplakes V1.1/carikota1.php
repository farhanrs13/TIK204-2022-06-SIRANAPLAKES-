<?php
require 'functions.php';
if (isset($_POST ["cari"])){
   // header('Location: login.php');
}

$db = mysqli_connect("localhost", "root", "", "siranaplakes2");
if (!$db) {
	die ('Gagal terhubung kedatabases: ' . mysqli_connect_error());	
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Sistem Informasi Ruang Rawat Inap Layanan Kesehatan</title>
      <!-- favicon -->
      <link rel="icon" href="images/siranaplakes.png" type="image/png"/>
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <!-- body -->
         <div class="header" style=" box-shadow: 0 1px #999;">
            <div class="container" >
               <div class="row" >
                     <div class="full">
                     <body>
                        <div class="container" >
                              <span class="fa fa-bars menu-icon"></span>
                              <div class="header-right">
                                 <a href="404.html">About us</a>
                                 <a href="index.php" class="login">Log out</a>
                                 <a href="404.html">Contact</a>
                              </div>
                              <div class="top-wrapper">
                              <img src="images/siranaplakes.png"style="width: 60px;px;height:60px; float: left;  " aligh="middle" alt="#" >
                              </div>
                        </div>
                     </body>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="text-bg"><br><br>
                  <div class="header-right"><br><br><br>
                  <h1 class="bold-1">Sistem Informasi Ruang Rawat Inap Layanan Kesehatan</h1>
                  <p>Aplikasi website pengecek ketersedian ruang rawat inap secara waktu nyata di pelayanan kesehatan sekitar Anda.</p>
               </div>
               </div>
            </div>

            <div class="col-md-6  col-md-12" >
               <form id="request" action="" method="post" class="main_form">
                  <div class="row">
                     <div class="col-md-6 ">
                        <select class="contactus" placeholder="Pilih Provinsi" type="type" name="Provinsi" style="color: 	#000000; font-size: 18px; letter-spacing: 1px; font-family: Roboto, Helvetica, Arial, sans-serif;">    
                        <option value="0000" disabled selected>Pilih Provinsi</option>
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
                        <select class="contactus" placeholder="Pilih Kabupaten/Kota" type="type" name="Kabupaten/Kota" style="color: 	#000000; font-size: 18px; letter-spacing: 1px; font-family: Roboto, Helvetica, Arial, sans-serif;">
                           <option value="0000" disabled selected>Pilih Kabupaten/Kota</option>
                           <option value="1111">Banda Aceh</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <select class="contactus" placeholder="Pilih Kecamatan" type="type" name="Kecamatan" style="color: 	#000000; font-size: 18px; letter-spacing: 1px; font-family: Roboto, Helvetica, Arial, sans-serif;">
                           <option value="0000">S e m u a</option>
                           <option value="1111">Darussalam</option>
                           <option value="2222">Syiah Kuala</option>
                           <option value="3333">Baiturrahman</option>
                           <option value="4444">Lueng Bata</option>
                        </select>                         
                     </div>
                     <div class="col-sm-12">
                        <button class="send_btn" ><a href="login.php" name="cari" style="color: ivory;">CARI</a>
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
</html>
