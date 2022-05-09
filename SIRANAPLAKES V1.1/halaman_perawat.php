<?php
require 'functions.php';
if (isset($_POST["submit"])) { 

    if( tambahan ($_POST) > 0 ) {
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
        document.location.href = 'update_kamar.php';
        </script>
        "; 
    }

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

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>SIRANAPLAKES</title>
    <!-- <link rel="stylesheet" type="text/css" href="stylesheet.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="responsive.css" />
    
    <link rel="icon" href="images/siranaplakes.png" type="image/png"/>
  </head>
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
                              <div class="top-wrapper">
                              <img src="images/siranaplakes.png"style="width: 120px;px;height:120px; float: left;" aligh="middle" alt="#" >
                              </div>
                        </div>
                    </body>
                    </div>
              </div>
            </div>
        </div>
      </header>
  <div class="top-wrapper">
    <div class="container">
      <form action="" method="post">
        <br /> <br> <br><br><br><br><br><br>
        <label for="fname">Nama Kelas Rawat:</label><br>
        <input type="text" id="fname"required="required" name="fname" /> <br /><br />
        <label for="lname">Jumlah Kamar:</label><br>
        <input type="text" id="lname" required="required" name="lname" /><br /><br />
        <label for="lname">Bed Kosong:</label><br>
        <input type="text" id="hname" required="required" name="hname" /><br /><br />
        <label for="lname">Info:</label><br>
        <input type="text" id="info" name="info" /><br /><br />
        <input class="klik" type="submit" name="submit" value="Submit" />
        <input class="klik" type="reset" />
      </form>

      </div>
      <div class="btn-wrapper">
      <div class="box1">
        <script>
          function startTime() {
              var today=new Date();
              var h=today.getHours();
              var m=today.getMinutes();
              var s=today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              document.getElementById('jam').innerHTML = h+":"+m+":"+s;
              var t = setTimeout(function(){startTime()},500);
          }
          function checkTime(i) {
              if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
              return i;
          }
        </script>

        <body onload="startTime()">
        <center><br />
        Jam Digital Real Time
        <div id="jam"></div>
        <div <?= "time"?> > </div>
        </center> <br /> <br /> <br />
      </div>
    </div>
  </div>

  <body></body>
</html>