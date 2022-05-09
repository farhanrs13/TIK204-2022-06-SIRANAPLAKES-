<?php
//koneksi database
$db = mysqli_connect("localhost", "root", "", "siranaplakes2");
if (!$db) {
	die ('Gagal terhubung kedatabases: ' . mysqli_connect_error());	
}


function tambahan ($data) {
    global $db;
    $fname = htmlspecialchars($data["fname"]);
    $lname = htmlspecialchars($data["lname"]);
    $hname = htmlspecialchars($data["hname"]);
    $info = htmlspecialchars($data["info"]);


    //insert data ke db

//insert data ke db

$query = "INSERT INTO perawat
VALUES
('$fname', '$lname', '$hname', '$info' )
";
mysqli_query($db, $query);

return mysqli_affected_rows($db);
}


function register ($data) {
    global $db;
        $nik =($data["nik"]);
        $usernamesignup = strtolower(stripslashes($data["usernamesignup"]));
        $emailsignup = ($data["emailsignup"]);
        $passwordsignup = mysqli_real_escape_string($db, $data["passwordsignup"]);
        $passwordsignup_confirm = mysqli_real_escape_string($db, $data["passwordsignup_confirm"]);
        
        //cek username nik, email, dan username
        $result = mysqli_query($db, "SELECT nik FROM signup_data WHERE nik = '$nik'");
        $result1 = mysqli_query($db, "SELECT emailsignup FROM signup_data WHERE emailsignup = '$emailsignup' ");
        
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                alert ('NIK Sudah Terdaftar SILAHKAN LOGIN!!')
            </script>";
        return false;
        }
        
        if(mysqli_fetch_assoc($result1)){
            echo "<script>
                alert ('Email Sudah Terdaftar SILAHKAN LOGIN!!')
            </script>";
        return false;
        }



        //cek password konfirmasi
        if ($passwordsignup !== $passwordsignup_confirm) {
            echo "<script> 
                    alert('Konfirmasi Password Tidak Sesuai!!')
                </script>";
                return false;
        
        
        }
        

    // endkripsi pass
    $passwordsignup = password_hash($passwordsignup, PASSWORD_DEFAULT);

    

    //insert data ke db

$query = "INSERT INTO signup_data
VALUES
('', '$nik', '$usernamesignup', '$emailsignup', '$passwordsignup' )
";
mysqli_query($db, $query);

return mysqli_affected_rows($db);

}

function logout ($data) {
    session_start();
    session_destroy();
    header("Location: index.php");
}

?>


