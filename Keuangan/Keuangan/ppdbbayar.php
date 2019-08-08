<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $nis = htmlentities($_POST['nis']);
		$tanggal=htmlentities($_POST['tanggal']);
		$tanggal = date("Y-m-d", strtotime($tanggal)) ;
        $uang = htmlentities($_POST['uang']);
        $query = $db->prepare("INSERT INTO ppdb(nis,tanggal,uang)
        VALUES (:nis,:tanggal,:uang)");
		$query->bindParam(":nis", $nis);
        $query->bindParam(":tanggal", $tanggal);
        $query->bindParam(":uang", $uang);
        $query->execute();
        header("location: ppdb.php");
    }
?>