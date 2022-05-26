<?php
    if(isset($_GET['id'])){
        $id    =$_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "koneksi.php";
    $query    =mysqli_query($kon, "SELECT * FROM signup_data WHERE id='$id'");
    $result    =mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>SIRANAPLAKES</title>
</head>

<body>
    <div class="container">
    <h2>Detail Data Pasien</h2>
    <h5><i>Note: Dibawah ini Sesuai Dengan Id Pasien</i> <b><?php echo $id?></b></h5>
    <table class="table table-striped">
        <tr>
            <td size="90">Id</td>
            <td>: <?php echo $result['id']?></td>
        </tr>
        <tr>
            <td size="90">NIK</td>
            <td>: <?php echo $result['nik']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $result['usernamesignup']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?php echo $result['emailsignup']?></td>
        </tr>
    </table>
</div>
    <div class="tengah">
        <button><a href="cekdata.php"> Kembali</a></td></button>
    </div>
</body>
</html>