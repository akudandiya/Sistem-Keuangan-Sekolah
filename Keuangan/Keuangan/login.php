<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $db->prepare('SELECT * FROM admin WHERE username = :username and password = :password');
$admin->execute(array(
                  ':username' => $_POST['username'],
                  'password' => $_POST['password']
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
 
if(empty($row['username'])){

echo '<script language="javascript">alert("Username atau Password anda salah"); document.location="index.php";</script>';

}else {

$_SESSION['login_user'] = $_POST['username'];

echo '<script language="javascript">alert("Selamat Datang Admin"); document.location="index-1.php";</script>';
}
}
?>