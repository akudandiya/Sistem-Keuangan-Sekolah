<!DOCTYPE html>
<html>
<?php
include ("session.php");
?>    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="logo.png">
    <title>Aplikasi Keuangan</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/sanspro.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/w3.css">
</head>

<body class="header-blue" style="background-image: url('assets/images/bg-01.jpg');width: 100%;background-size:100%">
    <nav class="navbar navbar-dark navbar-expand-md sticky-top d-block visible navigation-clean-button" style="background-color:rgb(40,45,50);">
        <div class="container"><a class="navbar-brand" href="index-1.php">Aplikasi Keuangan</a><a align="right" class="btn btn-primary" style="margin-right:9px;background-color:rgb(25,132,231);" href="logout.php">Log Out</a>
                </div>
        </div>
    </nav>
	<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
		<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
		<a href="ppdb.php" class="w3-bar-item w3-button">PPDB</a>
		<a href="daftarulang.php" class="w3-bar-item w3-button">Daftar Ulang</a>
		<a href="spp.php" class="w3-bar-item w3-button">SPP</a>
		<a href="siswa.php" class="w3-bar-item w3-button">Siswa</a>
	</div>

<!-- Page Content -->
	<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
		<div>
			<button class="w3-button w3-white w3-large" onclick="w3_open()">&#9776;</button>
			<div class="w3-container">
		</div>
	</div>
    <div class="projects-horizontal" style="background-color:rgba(255,255,255,0);">
        <div class="container">
		
                <h2 class="text-center">Daftar Ulang</h2>
                <?php include 'daftarulangtabel.php';?>
                </div>
            </div>
</body>
<footer>

</footer>  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script>
		function w3_open() {
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("myOverlay").style.display = "block";
		}
		function w3_close() {
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("myOverlay").style.display = "none";
		}
	</script>

</html>