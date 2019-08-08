<?php

include("../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id_dc = $_POST['id_dc'];
	$daycarename = $_POST['daycarename'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$deskripsi = $_POST['deskripsi'];
	
	// buat query update
	$db = mysqli_connect("localhost","root","","daycare") or die("Not connected.");
	$sql = "UPDATE daycaredata SET daycarename='".$daycarename."', alamat='".$alamat."', deskripsi='".$deskripsi."' WHERE id_dc='".$id_dc."'";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: index-admin.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
