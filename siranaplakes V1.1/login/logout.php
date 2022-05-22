<?php  
function logout ($data) {
    session_start();
    session_destroy();
    header("Location: index.php");
}
?>