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
        <div class="header" style=" box-shadow: 0 1px #999;">
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
                            <img src="images/siranaplakes.png"style="width: 60px;px;height:60px; float: left;" aligh="middle" alt="#" >
                            
                        </div>
                    </body>
            </div>
        </div>
    </div>
</div>
</header>
<div class="letak" >
<center>
    <b>
        <p>Rumah Sakit Umum Daerah Doktor Zainal Abidin.</p>
        <p>Alamat : jln.Daud Beureueh No.108B, Banda Aceh.</p>
        <p>Telpon : 065134271</p>
    </b>
    <div class="cari_rs">
        <a href="halaman_perawat.php"><button class="third">Up Date</button></a>
        <a href="cek_booking.php"><button class="third">Cek Bookingan</button></a>
    </div> 
    <section class="hasil">
		<tbody>
			<?php 
			$result = mysqli_query($db,"SELECT * FROM perawat2 ORDER BY id_pr DESC");
            $data=[];
			while(($r = mysqli_fetch_assoc($result))){
                $data[]=$r;
                $d2=$data;
                
				?>
                <?php foreach($d2 as $dd)
                if($dd=="info"){
                    break;
                }
                ?>

                    
            <b ><?php echo strtoupper($dd['kname']); ?></b>
            <p>Ruang : <?php echo $dd['fname']; ?></p>
            <p>Tersedia Kamar : <?php echo $dd['lname']; ?></p>
            <p>Bad Kosong : <?php echo $dd['hname']; ?></p>
            <p>Info Update : <?php echo $dd['info']; ?></p>
            <!-- <button class="third" onClick="alert('Pilihan Sukses!! SILAHKAN TEKAN DAFTAR')">Pilih</a></button> -->
            <a href="hapus.php?id_pr=<?= $dd['id_pr'] ?>"><button class="third" name="hapus" onclick = "return confirm('Yakin Data Akan Dihapus');">HAPUS</a></button></a>
            <br> <hr>
            <?php 
			}
        	?>
		</tbody>

        </section>
        </center>
    </div>
</body>
</html>