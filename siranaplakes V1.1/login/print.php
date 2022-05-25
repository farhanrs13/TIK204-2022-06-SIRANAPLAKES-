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
    <div class="top-per" style="background-image: url('images/Pattern.png');">
        <div class="container">
        <img style="width:50px;" src="./images/siranaplakes1.png" alt="">
        <h2>Selamat Pendaftaran Anda Berhasil !</h2> <br>
        <p>Struk Ini di Gunakan Sebagai Bukti yang Sah Untuk Booking Rumah Sakit Yang Dituju.<p>
        <h4>Terima Kasih!</h4>
        <section class="banner_maiin">
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
                            <h3>INFORMASI LAYANAN KESEHATAN</h3>
                            <h3>RS Umum Daerah Dr. Zainoel Abidin</h3>
                            <p style="color: rgb(255, 255, 255); font-size: 15px;">Alamat : Jl. Tgk Daud Beureueh, NO. 108 B. Aceh</p>
                            <p style="color: rgb(255, 255, 255); font-size: 15px;">Telp/HP : 065134571</p>
                            <div class="contact" >
                                <p style="padding: 10px; width: 100%;"><label for="username" class="unames"  > Tipe Ruangan :<?php echo strtoupper($dd['kname']); ?></label></p>
                                <p style="padding: 10px;"><label for="username" class="unames"  > Nama Ruangan : <?php echo $dd['fname']; ?></label></p>
                                <p style="padding: 10px;"><label for="username" class="unames"  > Nomor Pasien : K1/RA/P00<?php echo $dd['id_pr']; ?></label></p>
                                <p style="padding: 10px;"><label for="username" class="unames"  > Nama Petugas : Putri</label></p>
                                <p style="padding: 10px;"><label for="username" class="unames"  > Kontak Petugas : +62852 1234 6789</label></p>
                            </div>
                            <?php 
                        }
                        ?>
                        
                    </div>
                </form>
                
                <center><img style="width:150px; padding:10px;" src="./images/barcode2.png" alt=""></center>
                <a href="../login.php" >Keluar</a>
            </div>
        </div>
    </section>
        <script>
        window.print();
        </script>
        
    </div>
    </div>
    </footer>

</body>
</html>
