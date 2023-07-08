<?php
    function koneksi(){
        $con = mysqli_connect('localhost','root','','pendidikanpegawai');

        if(!$con){
            die("tidak dapat membuat koneksi");
        }
        // else{
        // echo "<script>alert('koneksi berhasil dibuat')</script>"; 
        // }
        return $con;
    }
    
    function disconnect($con){
        mysqli_close($con);
    }
?>