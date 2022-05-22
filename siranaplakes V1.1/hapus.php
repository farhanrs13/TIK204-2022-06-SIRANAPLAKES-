<?php 
require 'functions.php';
$id = $_GET['id_pr'];
if( hapus($id) > 0) {
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'update_kamar.php';
    </script>
    ";
}
?>