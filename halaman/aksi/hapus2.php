<?php
    require_once '../connection.php';

    $kon = koneksi();

    $id = mysqli_real_escape_string($kon, $_GET['id']);

    if($id == true){
        echo "<script>confirm ('apakah anda ingin menghapus data ini?')</script>";
    }else{
        echo "<script>alert ('anda membatalkannya')</script>";
    }
?>