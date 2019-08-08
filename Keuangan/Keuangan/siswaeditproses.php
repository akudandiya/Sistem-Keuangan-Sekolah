<?php

include 'config.php';
    if(!isset($_GET['nis'])){
        die("Error: NIS Tidak Dimasukkan");
    }
    $query = $db->prepare("SELECT * FROM siswa WHERE nis = :nis");
    $query->bindParam(":nis", $_GET['nis']);
    $query->execute();
    if($query->rowCount() == 0){
        die("Error: NIS Tidak Ditemukan");
    }else{
        $row = $query->fetch();
    }
    if(isset($_POST['submit'])){
        $nama = htmlentities($_POST['nama']);
        $kelas = htmlentities($_POST['kelas']);
		$tahun = htmlentities($_POST['tahun']);
		$tahun = date("Y-m-d", strtotime($tahun)) ;
        $query = $db->prepare("UPDATE siswa SET nis=:nis,nama=:nama,kelas=:kelas,tahun=:tahun WHERE nis=:nis");
        $query->bindParam(":nama", $nama);
        $query->bindParam(":kelas", $kelas);
		$query->bindparam(":tahun", $tahun);
        $query->bindParam(":nis", $_GET['nis']);
        $query->execute();
        header("location: siswa.php");
    }

?>
