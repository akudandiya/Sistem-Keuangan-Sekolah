<?php

session_start();
if(!isset($_SESSION["username"])) header("Location: index-1.php");
?>