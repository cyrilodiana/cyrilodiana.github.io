
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
        <h3 class="pt-2">Data Penginapan </h3>
        <hr>

        <div class="card">
            <div class="card-header text-bg-info"> 
                Penginapan
            </div>
            
            <div class="card-body">

            <a href="add_rooms.php" class="btn btn-danger" ><i class="fa-solid fa-plus"></i> Add Data </a>

            <p class="card-title">
            <?php

                if(isset($_GET['alert'])){
                    if($_GET['alert'] ==  "gagal"){
                        echo "<div class='alert alert-danger' role='alert'>  Data Gagal Ditambahkan </div>";
                    }elseif($_GET['alert'] == "berhasil"){
                        echo "<div class='alert alert-success' role='alert'> Data Berhasil Ditambahkan</div>";
                    }elseif($_GET['alert'] == "berhasiledit"){
                        echo "<div class='alert alert-success' role='alert'> Data Berhasil Diubah</div>";
                    }elseif($_GET['alert'] ==  "gagaledit"){
                        echo "<div class='alert alert-danger' role='alert'>  Data Gagal Diubah </div>";
                    }elseif($_GET['alert'] == "berhasildel"){
                        echo "<div class='alert alert-success' role='alert'> Data Berhasil Dihapus</div>";
                    }elseif($_GET['alert'] ==  "gagaldel"){
                        echo "<div class='alert alert-danger' role='alert'>  Data Gagal Dihapus </div>";
                    }
                }
            ?>
            </p>

 
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Gambar</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Harga Kamar</th>
                    <th scope="col">Description</th>
                    <th scope="col">Tools</th>

                </tr>
            </thead>
            <tbody>
                
            <?php 
                include "../config/db_koneksi.php";

                $sql = mysqli_query($connect, 'SELECT * FROM rooms');
			    while($data = mysqli_fetch_array($sql)) {
             ?>

                <tr>
                   <td >
                         <img src="action/images/rooms/<?=$data['file'];?>" height="100" width="100"> <br><br>
                         <a href="edit_gambar.php?id_rooms=<?php echo $data['id_rooms'];  ?>" class="btn btn-sm btn-danger">Edit Gambar</a>
                    </td>
                    <td >
                        <?=$data['tipe_room'];?>
                    </td>
                    <td>
                        <?=$data['harga'];?>
                    </td>
                    <td>
                        <?=$data['dsc'];?>
                    </td>
                    <td >
                        <a onclick="return confirm('Edit data <?php echo $data['file']; ?>')" class="btn btn-sm btn-success" href="edit_rooms.php?id=<?php echo $data['id_rooms']; ?>">
                        <span class="fa-solid fa-pen-to-square"></span></a>
                        <a onclick="return confirm('Yakin hapus <?php echo $data['file']; ?>');" class="btn btn-sm btn-danger tooltips" data-placement="buttom" data-togle="tooltip" title="Hapus Data" href="action/delete_rooms.php?&kd=<?php echo $data['id_rooms'];?>"><span class="fa-solid fa-trash"></span></a>
                     </td>
                  </tr>
              <?php } ?>

            </tbody>
            </table>

                
            </div>

            
        </div>
        


    </div>


  </div>

  <?php include 'layout/footer.php' ?>
 