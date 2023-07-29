<?php
include '../../config/db_koneksi.php';

    $id_rooms = $_GET['kd'];

$query = mysqli_query($connect, "DELETE FROM rooms WHERE id_rooms='$id_rooms'");

    if ($query){
        echo "<script>window.location = '../data_rooms.php?alert=berhasildel'</script>"; 	
    } else {
        echo "<script>window.location = '../data-rooms.php?alert=gagaldel'</script>";	
    }
?>