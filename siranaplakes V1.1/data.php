<?php
require 'functions.php';
if (isset($_POST["submit"])) { 

    if( tambah ($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambah!');
        document.location.href = 'index.php';
        </script>
        "; 
    } else {
        echo "
        <script>
        alert('data gagal ditambah!');
        document.location.href = 'index.php';
        </script>
        "; 
    }

}
?>

<?php
    include 'functions.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
    $no=1;
    foreach ($mahasiswa as $row){
        $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
        echo "<tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['jurusan']."</td>
              </tr>";
        $no++;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
    <h1>Data User </h1>
    <?php foreach($_POST) :?>
        
    <ul>
        <li><b> Nama User :</b><?= $_POST ["usernamesignup"]?></li>
        <li><b> NIK :</b><?= $_POST ["nik"]?></li>
        <li><b> Alamat Email :</b><?= $_POST ["emailsignup"]?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>