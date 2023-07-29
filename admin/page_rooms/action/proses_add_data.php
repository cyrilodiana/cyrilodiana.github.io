<?php 
    
    include '../../config/db_koneksi.php';

    $tipe_room  = $_POST['tipe_room'];
    $harga      = $_POST['harga'];
    $dsc        = $_POST['dsc'];

    $foto_name = $_FILES['file']['name'];
    $foto_tmp = $_FILES['file']['tmp_name'];
	
	if(empty($foto_name))
	{
		echo "<script> window.location = '../data_rooms.php?alert=gagal'</script>"; 	
	}
	
	else{
		move_uploaded_file($foto_tmp, "images/rooms/".$foto_name);
    
		$simpan = mysqli_query($connect, "INSERT INTO rooms (file, tipe_room, harga, dsc) VALUES ('$foto_name', '$tipe_room', '$harga', '$dsc')");
		echo "<script> window.location = '../data_rooms.php?alert=berhasil'</script>"; 
	}


?>