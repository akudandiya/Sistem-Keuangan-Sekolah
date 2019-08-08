<?php

include("../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$nama = $_POST['nama'];
	$No_tel = $_POST['No_tel'];
	
	// buat query update
	$db = mysqli_connect("localhost","root","","daycare") or die("Not connected.");
	$sql = "UPDATE users SET email='".$email."', alamat='".$alamat."', password='".$password."', nama='".$nama."', No_tel='".$No_tel."' WHERE id='".$id."'";
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
