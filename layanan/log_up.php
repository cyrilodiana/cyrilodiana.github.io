<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link href="../img/bg.jpg" rel="icon">
    <!-- end icon -->

    <title>LogUp | Ronella Cottage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/44a584215b.js" crossorigin="anonymous"></script>
  </head>

    <style>
        html,body{height: 100%;}
         .bg-utama{
         background-color: rgba(0, 0, 0, 0.75);;
         background-image: url(../img/bg.jpg);
         background-size: cover;
         background-position: center;
         text-align: center;
         height: 100%;
         }
        .card-center{
            padding-left: 30%;
            padding-right: 5%;
        }
        .bg-color{
            background-color: rgba(0, 0, 0, 0.75); 
            height: 100%;
        }

    </style>

  <body class="bg-utama">
    <div class="bg-color">
        <div class="pt-5 card-center">
            <div class="container">
                <div class="col-sm-6">
                    <div class="card text-bg-secondary">
                        <div class="card-body" style="font-family: cambria;">
                            <div class="text-center">
                                <label class="mb-3">Silahkan Mengisi Data Dibawah.</label>
                            </div>

                            <?php

                                if(isset($_GET['alert'])){
                                    if($_GET['alert'] ==  "gagal"){
                                        echo "<div class='alert alert-danger' role='alert'> data gagal diproses. ! </div>";
                                    }elseif($_GET['alert'] == "berhasil"){
                                        echo "<div class='alert alert-success' role='alert'> Akun berhasil dibuat. </div>";
                                    }
                                }
                            ?>

                            <form method="post" action="action/proses_log_up.php">

                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nama Lengkap"name="nama" >
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control"  placeholder="Alamat" name="alamat">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control"  placeholder="No Telepon" name="nohp">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control"  placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control"  placeholder="Password" name="password">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Buat Akun <i class="fa-solid fa-user-plus"></i></i></button>
                            </div>

                            </form>
                            
                            <div class="row pt-3">
                                <div class="col-sm-6">
                                    <p style="font-family: cambria; text-align: center; padding-top: 3%;">Anda sudah punya akun.?</p>                
                                </div>
                                <div class="col-sm-6">
                                    <a href="login.php" class="btn btn-danger"  style="font-family: cambria; float: right;">Masuk <i class="fa-solid fa-right-to-bracket"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>