
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
        <h3 class="pt-2">Data Pengunjung</h3>
        <hr>

        <div class="card">
            <div class="card-header text-bg-secondary"> 
                Pengunjung 
            </div>
            <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Tools</th>

                </tr>
            </thead>
            <tbody>
                
            <?php 
                include "../config/db_koneksi.php";

                $sql = mysqli_query($connect, 'SELECT * FROM user');
			    while($data = mysqli_fetch_array($sql)) {
             ?>

                <tr>
                   <td >
                         <?=$data['nama'];?>
                    </td>
                    <td >
                        <?=$data['alamat'];?>
                    </td>
                    <td>
                        <?=$data['nohp'];?>
                    </td>
                    <td>
                        <?=$data['email'];?>
                    </td>
                    <td>
                        <?=$data['password'];?>
                    </td>
                    <td >
                        <a onclick="return confirm('Edit data <?php echo $data['nama']; ?>')" class="btn btn-sm btn-success"  data-toggle="modal" data-bs-target="#Modal<?php echo $data['id_user']; ?>">
                        <span class="fa-solid fa-pen-to-square"></span></a>
                        <a onclick="return confirm('Yakin hapus <?php echo $data['nama']; ?>');" class="btn btn-sm btn-danger tooltips" data-placement="buttom" data-togle="tooltip" title="Hapus Data" href="pages/delete_mobil.php?&kd=<?php echo $data['id_user'];?>"><span class="fa-solid fa-trash"></span></a>
                     </td>


                     <!-- modal Edit  -->

                        <div class="modal fade" id="Modal<?php echo $data['id_user']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pengunjung</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>

                     <!-- end modal -->
                  </tr>
              <?php } ?>

            </tbody>
            </table>
                
            </div>
        </div>


    </div>


  </div>

  <?php include 'layout/footer.php' ?>
 