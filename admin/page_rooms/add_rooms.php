
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
            Add Data Penginapan
        </div>
        <div class="card-body">
            <form method="post" action="action/proses_add_data.php" enctype="multipart/form-data">

                <div class="form-group mb-2">
                    <label class="mb-2">Foto kamar</label>
                        <input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg"  />
                </div>
                <div class="form-group mb-2">
                    <label class="mb-2">Tipe Kamar</label>
                        <select class="form-select" aria-label="Default select example" name="tipe_room">
                            <option selected disabled>Pilihan-</option>
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
                                <input type="text" class="form-control" name="harga" />
                            </div>
                        </div>
                </div>

                <div class="form-group mb-2">
                    <label class="mb-2"> Deskripsi Kamar </label>
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="dsc"></textarea>
                </div>

                <input type="submit" class="btn btn-danger" value="Tambah">
                
            </form>
            
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>

