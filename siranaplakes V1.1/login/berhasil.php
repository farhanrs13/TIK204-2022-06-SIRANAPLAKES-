<?php
require '../functions.php';

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SIRANAPLAKES</title>
<link href="" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="shortcut icon" href="favicon.ico" >
<link rel="icon" href="images/siranaplakes.png" type="image/png"/>
</head>
<body>
    <header style=" box-shadow: 0 0.5px #999;">
    <div class="container" >
        <span class="fa fa-bars menu-icon"></span>
        <div class="header-left">
        <img class="logo" src="images/siranaplakes1.png" style="width: 60px;height:60px; float: left; padding-left: 0%;"  alt="#">
        </div>
        <div class="header-right" style="margin: 30px; padding:10px;">
        <a style="color:green; font-size: 20px; padding-right: 30px;" href="../index.php">Beranda</a>
        <a style="color:green; font-size: 20px; padding-right: 30px;" href="../hub.php">Hubungi Kami</a>
        <a style="color:green; font-size: 20px;" href="../login.php" class="login">Log out</a>
        </div>
    </div>
    </header>
    <div class="top-wrapper">
    <div class="container">
        <h1>Selamat Pendaftaran Anda Berhasil !</h1> <br>
        <p>Pendaftaran Ruang Rawat Inap di Layanan Kesehatan yang Anda pilih telah berhasil dilakukan, 
            segera menuju ke tempat agar bisa dibantu oleh pihak Layanan Kesehatan.<p>
        <p>Terima Kasih!</p>
        <div class="top-wrapp">
        <section class="banner_main">
            <div class="contain">
            <div class="row d_flex">
            <div class="col-md-6">
            </div>
            <div class="col-md-6  col-md-12" >
            
			<?php 
			$result = mysqli_query($db,"SELECT * FROM perawat2 ORDER BY id_pr DESC LIMIT 1");
            $data=[];
			while( ($r = mysqli_fetch_assoc($result))){
                $data[]=$r;
                $d2=$data;
                
				?>
                <?php foreach($d2 as $dd)
                if($dd==1){
                break;
                }
                ?>
                <form id="request" action="" method="post" class="main_form">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h2>INFORMASI LAYANAN KESEHATAN</h2>
                            <h2>RS Umum Daerah Dr. Zainoel Abidin</h2>
                            <p style="color: rgb(255, 255, 255); font-size: 15px;">Alamat : Jl. Tgk Daud Beureueh, NO. 108 B. Aceh</p>
                            <p style="color: rgb(255, 255, 255); font-size: 15px;">Telp/HP : 065134571</p>
                            <div class="contact" style="padding: 10px;">
                                <p style="padding: 10px; width: 100%;"><label for="username" class="unames"  > Tipe Ruangan :<?php echo strtoupper($dd['kname']); ?></label></p>
                                <p style="padding: 10px;"><label for="username" class="unames"  > Nama Ruangan : <?php echo $dd['fname']; ?></label></p>
                                <p style="padding: 10px;"><label for="username" class="unames"  > Nomor Pasien : K1/RA/P00<?php echo $dd['id_pr']; ?></label></p>
                                <p style="padding: 10px;"><label for="username" class="unames"  > Nama Petugas : Putri</label></p>
                                <p style="padding: 10px;"><label for="username" class="unames"  > Kontak Petugas : +62852 1234 6789</label></p>
                            </div>
                        <?php 
                        }
                        ?>
                        <center style="padding: 30px;">
                            <a class="akhir" style="padding: 20px 50px; transition:all 0.5s" href="./data_pribadi.html" onclick = "return confirm('Yakin Ingin Membatalkan Pilihan??');">Batal</a>
                            <a class="akhir" style="background-color:lawngreen; padding:20px 50px; " href="print.php" onclick = "return confirm('Booking Anda Success!');">Booking</a>
                        </center>
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
