<?php
    require_once 'connection.php';

    $kon = koneksi();

    $id = mysqli_real_escape_string($kon, $_POST['id']);
    $nama = mysqli_real_escape_string($kon, $_POST['nama']);
    $pendidikan = mysqli_real_escape_string($kon, $_POST['pendidikan']);
    $sekolah = mysqli_real_escape_string($kon, $_POST['sekolah']);
    $ijazah = mysqli_real_escape_string($kon, $_POST['ijazah']);
    $studi = mysqli_real_escape_string($kon, $_POST['studi']);
    $negara = mysqli_real_escape_string($kon, $_POST['negara']);
    $mulai = mysqli_real_escape_string($kon, $_POST['mulai']);
    $status = mysqli_real_escape_string($kon, $_POST['status']);

    $sql = "DELETE FROM pegawai WHERE id_pegawai = '$id'";
    $hasil = mysqli_query($kon, $sql);
    header("Location: index.php?sukses=Data Saved Successfully!");
    disconnect($kon);
?>