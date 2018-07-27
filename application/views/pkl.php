
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	  <meta name="description" content="">
    <meta name="author" content="">
      <title>Ramayana.</title>
	 <link rel="stylesheet" type="text/css" href="<?= base_url('assets\bootstrap4\bootstrap.min.css')?>">
	 <link rel="stylesheet" type="text/css" href="<?= base_url('assets\FA\css\all.css')?>">
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets\css\bootstrap-reboot.min.css')?>">
</head>
<body>
<!--navbar atas-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://localhost/belf/"><i class="fab fa-pied-piper-alt"></i>Ramayana.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <button class="btn dropdown-toggle" type="button" id="atas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-astronaut"></i><b>USER</b>
        </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="atas">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item" href="#"></a>
            <hr>
            &nbsp 
              <a href="#">
                <button type="button" class="btn btn-success">Ganti Pass</button> 
                <button type="button" class="btn btn-danger">Logout</button>
              </a>
          </div>
      </li>
    </ul>
  </div>
</nav>
<!--navbar kiri(sidebar)-->
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar px-3 pt-2">
          <div class="sidebar-sticky">
            <div class="content"></div>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <i class="fab fa-product-hunt"></i></span>
                    <font color="black">Produk</font>
                  </a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/belf/index.php/welcome/penjualan">
                    <i class="fas fa-hand-holding-usd"></i></span>
                    <font color="black">Penjualan</font>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/belf/index.php/welcome/report">
                    <i class="far fa-flag"></i></span>
                    <font color="black">Report</font>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
<!-- Content -->
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-1 px-3" id="content">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Selamat Datang Di Toko Ramayana</h1>
    </div>
      <p>Ramayana menyediakan barang yang anda butuhkan</p>

<!--Script-->
    <script src="<?= base_url('assets/pjax/jquery.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap4/popper.js')?>"></script>
    <script src="<?= base_url('assets/FA/js/all.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap4/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/Chart.min.js')?>"></script>
    <script src="<?= base_url('assets/pjax/jquery.pjax.js')?>"></script>
    <!--<script src="<?= base_url('assets/pjax/pages.js')?>"></script>-->
    <script type="text/javascript">
    $(function(){
      $(document).pjax('ul a', '#main')
    })
    </script>
  </body>
</html>
