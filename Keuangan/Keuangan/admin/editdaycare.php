<?php 

include("../config.php");

if( !isset($_GET['id_dc']) ){
	// kalau tidak ada id di query string
	header('Location: index-admin.php');
}

//ambil id dari query string
$id_dc = $_GET['id_dc'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM daycaredata WHERE id_dc='".$id_dc."'";
$query = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<html>

</html>


<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
    <link rel="stylesheet" href="/daycare/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/daycare/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="/daycare/assets/css/Brands.css">
    <link rel="stylesheet" href="/daycare/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="/daycare/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="/daycare/assets/css/Header-Blue.css">
    <link rel="stylesheet" href="/daycare/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="/daycare/assets/css/Map-Clean.css">
    <link rel="stylesheet" href="/daycare/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="/daycare/assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="/daycare/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="/daycare/assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
</head>

<body class="header-blue">
    <nav class="navbar navbar-dark navbar-expand-md sticky-top d-block visible navigation-clean-button" style="background-color:rgb(40,45,50);">
        <div class="container"><a class="navbar-brand" href="index-admin.php">DayCare</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a></a></li>
                    <li class="nav-item" role="presentation"><a></a></li>
                </ul>
                <div class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="font-size:18px;color:rgb(255,255,255);">
                <?php

                session_start();
                if ($_SESSION['email']==true){
                    $email = $_SESSION['email'];
                    echo $email;}
                ?> </a>
                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="/daycare/logout.php">logout</a></div>
        </div>
    </nav>
    <div class="projects-horizontal" style="background-color:rgba(255,255,255,0);">
        <div class="container">
		<h2>
			<div class="row">
				<div class="col-sm"><a href="index-admin.php"><button type="button" class="btn btn-outline-primary"><</button></a></div>
				<div class="col-sm text-center"><a> Projects </a></div>
				<div class="col-sm"></div>
			</div>
        </h2>
		<body>
			<header>
				<h3>Deskripsi</h3>
			</header>
			
			<form action="proseseditdaycare.php" method="POST">
				
				<fieldset>
					
					<input type="hidden" name="id_dc" value="<?php echo $row['id_dc'] ?>" />
				
				<div class="form-group">
					<div>Nama Daycare</div>
					<input class="form-control" type="text" name="daycarename" value="<?php echo $row['daycarename'];?>"></div>
					<div>Email</div>
					<div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email" value="<?php echo $row['email'];?>"></div>
					<div>Alamat</div>
					<div class="form-group"><input class="form-control" type="text" name="alamat" placeholder="alamat" value="<?php echo $row['alamat'];?>"></div>
					<div>Deskripsi</div>
					<div class="form-group"><textarea class="form-control" rows="14" name="deskripsi" placeholder="Deskripsi" ><?php echo $row['deskripsi'];?></textarea></div>
					<button class="btn btn-light action-button" type="submit" value="Simpan" name="simpan" style="background-color:rgb(51, 204, 255);">Simpan</button>
				</fieldset>
				
			
			</form>
			
			</body>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>DayCare Map</h3>
                        <p>.</p>
                    </div>
                    <div class="col offset-lg-0 item social"><a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a><a href="https://www.twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a></div>
                </div>
				<p> </p>
                <div class="text-center" ><a class="btn btn-light action-button" data-target="#pesanmodal" href="#" data-toggle="modal" class="text-center" style="color:rgb(255,255,255);font-size:20px;" >Contact Us</a></div>
                <p class="copyright">DayCare Map © 2018</p>
            </div>
        </footer>
        <div class="modal fade" role="dialog" tabindex="-1" id="pesanmodal" aria-labelledby="emodal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form action = "insert.php" method="post">
                            <h2 class="text-center" style="color:rgb(0,0,0);">Contact us</h2>
                            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
                            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
                            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>