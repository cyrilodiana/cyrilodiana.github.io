<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?alert=login");
	}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ronella Cottage | Admin</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/C.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <script src="https://kit.fontawesome.com/44a584215b.js" crossorigin="anonymous"></script>
</head>