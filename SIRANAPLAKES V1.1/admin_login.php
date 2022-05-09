<?php
require 'functions.php';


if (isset($_POST["masuk"])) { 
    $username = $_POST["emailsignup"];
    $password = $_POST["passwordsignup"];

    $result = mysqli_query($db, "SELECT * FROM signup_data WHERE username='$emailsignup'");
        
    //cek username
    if (mysqli_num_rows($result)==1) {
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["passwordsignup"])) {
            header("location: halaman_perawat.php");
            exit;
        }
    }



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
                <h1>Login Account Admin</h1>
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
                            <form  action="halaman_perawat.php" method="post">
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname"  > Join Account Rumah Sakit </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" >  password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button">
                                    <input type="submit" nama="masuk" value="Login" /> 
								</p>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>