<?php
    require_once '../halaman/connection.php';

    $con = koneksi();

    $sql = 'SELECT nama_pegawai, tahun_mulai FROM pegawai';

    $hasil = mysqli_query($con, $sql);

    $nama_pegawai = array();
    $tahun = array();

    while($row = mysqli_fetch_assoc($hasil)){
        $nama_pegawai[] = $row['nama_pegawai'];
        $tahun[] = $row['tahun_mulai'];
    }

    $dataNamaPegawai = json_encode($nama_pegawai);
    $dataTahun = json_encode($tahun);
?>
