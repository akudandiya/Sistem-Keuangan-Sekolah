<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $nis = htmlentities($_POST['nis']);
		$nama = htmlentities($_POST['nama']);
        $kelas = htmlentities($_POST['kelas']);
		$tahun=htmlentities($_POST['tahun']);
		$tahun = date("Y-m-d", strtotime($tahun)) ;
		$stmt = $db->prepare("SELECT * FROM siswa WHERE nis=?");
		$stmt->execute([$nis]); 
		$user = $stmt->fetch();
		if ($user) {
			// email found
			echo "<script type='text/javascript'>alert('NIS sudah ada!!!');
				window.location='siswa.php';
				</script>";
		} else {
			// or not
		$query = $db->prepare("INSERT INTO siswa(nis,nama,kelas,tahun)
        VALUES (:nis,:nama,:kelas,:tahun)");
		$query->bindParam(":nis", $nis);
        $query->bindParam(":nama", $nama);
        $query->bindParam(":kelas", $kelas);
		$query->bindparam(":tahun", $tahun);
        $query->execute();
        header("location: siswa.php");
		} 

    }
?>