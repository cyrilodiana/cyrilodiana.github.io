<?php

include "../../config/db_koneksi.php";

	$id_rooms 	= $_POST['id_rooms'];

    $foto_name = $_FILES['file']['name'];
    $foto_tmp = $_FILES['file']['tmp_name'];
	
	if(empty($foto_name))
	{
		echo "<script> window.location = '../data_rooms.php?alert=gagaledit'</script>"; 	
	}
	
	else{
		move_uploaded_file($foto_tmp, "images/rooms/".$foto_name);
		

		$simpan = mysqli_query($connect, "UPDATE rooms SET file='$foto_name' WHERE id_rooms='$id_rooms' ");

		echo "<script> window.location = '../data_rooms.php?alert=berhasiledit'</script>"; 	

	}
?>