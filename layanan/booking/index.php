<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?alert=login");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link href="../../img/bg.jpg" rel="icon">
    <!-- end icon -->

    <title>Beranda | Ronella Cottage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/44a584215b.js" crossorigin="anonymous"></script>
  </head>

    <style>
        html,body{height: 100%;}
         .bg-utama{
         background-color: rgba(0, 0, 0, 0.75);;
         background-image: url(../../img/bg.jpg);
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

  <!-- navbar -->
  <nav class="navbar navbar-dark navbar-expand-lg bg-transparent">
            <div class="container nav-text">
                <a class="navbar-brand" href="#">Ronella Cottage</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cart.php">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </div>
            </div>
        </nav>

        <!--end navbar  -->

<!-- Rooms -->
    <div class="pt-5">
        <div class="text-center text-light pt-5">
            <h1 style="font-family: cambria;  padding-bottom:5%;" id="rooms"> R O O M S </h1>
        </div>
        <div style="padding-bottom: 5%;">
            <div class="container pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card card-transparent" style="width: 30rem;">
                            <img src="../../img/bg.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Rooms Reguler</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="layanan/action/redirect.php" class="btn btn-danger">booking <i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-transparent" style="width: 30rem;">
                            <img src="../../img/bg.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Rooms Premium</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-danger">booking <i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--  end rooms-->

    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>