<?php
require 'functions.php';
if (isset($_POST["submit"])) { 


    if( register ($_POST) > 0 ) {
        echo "
        <script>
        alert('User Berhasil Ditambahkan. SILAHKAN MASUK!!');
        document.location.href = './login/data_pribadi.php';
        </script>
        "; 
    } else {
        echo"<script>
        alert('User Gagal Ditambahkan!!');
        </script>
        ";
    }

}

if (isset($_POST["masuk"])) { 
    $emailsignup = $_POST["emailsignup"];
    $passwordsignup = $_POST["passwordsignup"];

    $result1 = mysqli_query($db, "SELECT * FROM signup_data WHERE
    emailsignup = '$emailsignup'");
    
    //cek emailsignup
    if (mysqli_num_rows($result1) === 1 ) {
        //cek pasword
        $row = mysqli_fetch_assoc($result1);
        if( password_verify($passwordsignup, $row["passwordsignup"])) {
            header("location:./login/data_pribadi.php");
            exit;
        }
    }
    $error = true;
    // if ($result->num_rows > 0) {
    //     $row = mysqli_fetch_assoc($result);
    //     $_SESSION['emailsignup'] = $row['emailsignup'];
    //     header("Location: berhasil_login.php");
    // } else {
    //     echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    // }


}

?>



<!DOCTYPE html>

<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css login/demo.css" />
        <link rel="stylesheet" type="text/css" href="css login/style.css" />
		<link rel="stylesheet" type="text/css" href="css login/animate-custom.css" />
        <link rel="icon" href="images/siranaplakes.png" type="image/png"/>
        
    </head>
    <body>
        <div class="container">
            <div class="codrops-top">
                <div class="clr"></div>
            </div>
            <header>
                <h1>Login and Registration</h1>
                <span>SIRANAPLAKES</span>
				<nav class="codrops-demos">
					<span><strong>Sistem Informasi Ruang Rawat Inap Layanan Kesehatan</strong></span>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <?php if( isset($error)) : ?>
                                <p style="color: red; font-style:italic;">Username/password salah</p>
                            <?php endif; ?>

                            <form  action="" method="post">
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="emailsignup" class="uname"  > Your Email </label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" > Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button">
                                    <input type="submit" name="masuk" value="Login" /> 
								</p> 
                                <p class="change_link">
									Belom Memiliki Akun ?
									<a href="#toregister" class="to_register">Daftar</a>
									<a href="admin_login.php" class="to_register">Login Admin</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="nik" class="nik" data-icon="u">NIK Anda</label>
                                    <input id="nik" name="nik" required="required" type="int" placeholder="1110110230948764"/>
                                <p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button">
									<input type="submit" name="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Sudah Mempunyai Akun ?
									<a href="login.php" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
            
        </div>
    </body>
</html>