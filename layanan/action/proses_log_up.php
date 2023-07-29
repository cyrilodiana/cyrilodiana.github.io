<?php

    include "../config/db_koneksi.php";

    $nama           =   $_POST["nama"];
    $alamat         =   $_POST["alamat"];
    $nohp           =   $_POST["nohp"];
    $email          =   $_POST["email"];
    $password       =   $_POST["password"];

    
    $cekemail       = mysqli_num_rows (mysqli_query($connect, "SELECT * FROM user WHERE email='$_POST[email]'"));
    
    if($cekemail > 0) {

      echo "<script>window.location = '../log_up.php?alert=gagal'</script>"; 

    }else{

   $sql = mysqli_query($connect, 'INSERT INTO user (nama, alamat, nohp, email, password) VALUES  
                              ("'.$nama.'", "'.$alamat.'", "'.$nohp.'","'.$email.'", "'.$password.'") ');

		  echo "<script>window.location = '../log_up.php?alert=berhasil'</script>";  
	}
?>