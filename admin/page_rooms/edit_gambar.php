
<?php 
    include 'layout/head.php' 
?>

<?php 
    include 'layout/sidebar.php' 
?>

<?php 
    include 'layout/navbar.php' 
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-danger">
            Edit Data Penginapan
        </div>
        <div class="card-body">

        <?php 
            include "../config/db_koneksi.php";
            $id_rooms = $_GET['id_rooms'];
            $sql = mysqli_query($connect, "SELECT * FROM rooms WHERE id_rooms='$id_rooms'");
            while($data = mysqli_fetch_array($sql)){
        ?>

            <form method="post" action="action/proses_edit_gambar.php" enctype="multipart/form-data">

                <input type="hidden" class="form-control" value="<?php echo $data['id_rooms']; ?>" name="id_rooms">
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="mb-2">Foto kamar</label>
                            <br>
                                <img src="action/images/rooms/<?= $data['file']; ?>" class="mb-2" width="450" height="300">
                        </div>
                        <div class="col-sm-6">
                            <label> Ubah Foto </label>
                                <input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg"   value="<?= $data['file']; ?>"/><br>
                                <input type="submit" class="btn btn-danger" value="Ubah">
                        </div>
                    </div>
                </div>
               

               
                
            </form>

            <?php } ?>

            
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>

