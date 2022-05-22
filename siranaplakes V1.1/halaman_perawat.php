<?php
require 'functions.php';
require 'time.js';
if (isset($_POST["submit"])) { 

    if( tambahan($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambah!');
        document.location.href = 'update_kamar.php';
        </script>
        "; 
    } else {
        echo "
        <script>
        alert('data gagal ditambah!');
        document.location.href = 'halaman_perawat.php';
        </script>
        "; 
    }
    return [true];
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>SIRANAPLAKES</title>
    <!-- <link rel="stylesheet" type="text/css" href="stylesheet.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="responsive.css" />
    <link rel="icon" href="images/siranaplakes.png" type="image/png"/>
  </head>
  <header>
        <div class="header" style=" box-shadow: 0 1px #999; background-color: #d8e9a8;">
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
                              <div class="top-wrapper">
                              <img src="images/siranaplakes.png" style="width: 60px;height:60px; float: left;" aligh="middle" alt="#" >
                              </div>
                        </div>
                    </body>
                    </div>
              </div>
            </div>
        </div>
      </header>
<center>
  <div class="letak">
    <div class="container">
    <div class="col-md-12">
      <form action="" method="post">
        <br /> <br> <br><br>
        <label for="kname">Kelas:</label><br>
        <input type="text" id="kname"required="required" name="kname" /> <br /><br />
        <label for="fname">Nama Kelas Rawat:</label><br>
        <input type="text" id="fname"required="required" name="fname" /> <br /><br />
        <label for="lname">Jumlah Kamar:</label><br>
        <input type="text" id="lname" required="required" name="lname" /><br /><br />
        <label for="lname">Bed Kosong:</label><br>
        <input type="text" id="hname" required="required" name="hname" /><br /><br />
        <label for="info">Info Di Update :</label><br>
        <input type="text" id="info" name="info" /><br /><br />
        <button style="background-color:darkseagreen; border-radius:15px; width:100px;">
        <p>Jam:</p>
          <div id="jam" name='jam'></div>
        </button><br>
        <type="text" id="info" name="info" />
        <input class="third" type="submit" name="submit" value="Submit" />
        <input class="third" type="reset" />
      </form>
      <div class="btn-wrapper">
      <div class="box1">
        <body onload="startTime()">
        </body>
        <br><br>

      </div>
      </center>   
    </div>
    </div>
    </div>
  </div>

  <body></body>
</html>