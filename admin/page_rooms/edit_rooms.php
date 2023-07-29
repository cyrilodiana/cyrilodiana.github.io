
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
            $id = $_GET['id'];
            $sql = mysqli_query($connect, "SELECT * FROM rooms WHERE id_rooms='$id'");
            while($data = mysqli_fetch_array($sql)){
        ?>

            <form method="post" action="action/proses_edit_data.php" enctype="multipart/form-data">

                <input type="hidden" class="form-control" value="<?php echo $data['id_rooms']; ?>" name="id_rooms">
            
                <div class="form-group mb-2">
                    <label class="mb-2">Tipe Kamar</label>
                        <select class="form-select" aria-label="Default select example" name="tipe_room">
                            <option selected disabled><?php echo $data['tipe_room']; ?></option>
                            <option value="Reguler">Reguler</option>
                            <option value="Premium">Premium</option>
                        </select>
                </div>
                <div class="form-group mb-2">
                    <label class="mb-2">Harga per Malam</label>
                        <div class="row">
                            <div class="col-sm-1">
                                <label>Rp.</label>
                            </div>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" name="harga" value="<?php echo $data['harga']; ?>" />
                            </div>
                        </div>
                </div>

                <div class="form-group mb-2">
                    <label class="mb-2"> Deskripsi Kamar </label>
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="dsc"><?php echo $data['dsc']; ?></textarea>
                </div>

                <input type="submit" class="btn btn-danger" value="Tambah">
                
            </form>

            <?php } ?>

            
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>

