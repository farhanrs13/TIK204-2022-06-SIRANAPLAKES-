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
    <h2>Data Pasien</h2>
    <table class="table table-success table-striped">
        <tr >
            <th>No</th>
            <th>NIK</th>
            <th>Nama Pasien</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $no=0;
        $query=mysqli_query($kon, "SELECT * FROM signup_data ORDER BY id DESC");
        while($result=mysqli_fetch_array($query)){
        $no++    
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $result['id']?></td>
            <td><?php echo $result['usernamesignup']?></td>
            <td><a href="sec_data.php?id=<?=$result['id']?>">Detail</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</body>
</html>