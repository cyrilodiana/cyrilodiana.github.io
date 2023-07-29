<?php

include "../../config/db_koneksi.php";

	$id_rooms 	= $_POST['id_rooms'];
    $tipe_room  = $_POST['tipe_room'];
    $harga      = $_POST['harga'];
    $dsc        = $_POST['dsc'];

  
	if(empty($id_rooms))
	{
		echo "<script> window.location = '../data_rooms.php?alert=gagaledit'</script>"; 	
	}
	
	else{

		$simpan = mysqli_query($connect, "UPDATE rooms SET tipe_room='$tipe_room', harga='$harga', dsc='$dsc' WHERE id_rooms='$id_rooms' ");

		echo "<script> window.location = '../data_rooms.php?alert=berhasiledit'</script>"; 	

	}
?>