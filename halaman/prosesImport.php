<?php
			require_once 'connection.php';
			require 'excelReader-main/excel_reader2.php';
			require 'excelReader-main/SpreadsheetReader.php';
            $con = koneksi();
            $file = mysqli_real_escape_string ($con, $_FILES['file']['name']);
			$targetDirectory = "tmp/". $file;
			move_uploaded_file($_FILES['file']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$nama = $row[0];
                $pendidikan = $row[1];
                $sekolah = $row[2];
                $tahun = $row[3];
                $studi = $row[4];
                $negara = $row[5];
                $mulai = $row[6];
                $status = $row[7];
				mysqli_query($con, "INSERT INTO pegawai VALUES('', '$nama', '$pendidikan', '$sekolah', '$tahun', '$studi', '$negara', '$mulai', '$status')");
			}
header("Location: form_import.php?sukses=Data Saved Successfully!");
disconnect($con);
?>