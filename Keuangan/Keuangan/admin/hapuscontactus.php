<?php

include '../config.php';

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	
	$conn = mysqli_connect("localhost", "root", "", "daycare");
	$query = mysqli_query($conn, "DELETE FROM contactus WHERE id_msg = '".$id."'");
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: index-admin.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
