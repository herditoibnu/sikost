<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>TEMUKAN</title>

  <?php include 'include.php'; ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php include('navbar1.php'); ?>

  <div class="container-fluid full-screen-section">
    <div class="container text-center">
      <h1><b>TEMUKAN!</b></h1>
      <span>Kehilangan barang atau menemukan barang? Mungkin yang kamu cari ada disini</span><br>
      <form class="search-form">
        <div id="parameter-wrapper" class="container-fluid parameter">
          <div class="form-group row">
            <input type="text" class="search-input form-control" autofocus>
          </div>
          <div class="form-group row text-left">
            <div class="col-xs-6 col-sm-6 col-md-6 vertical-white-space">
              <label for="sel1">Kategori:</label>
              <select class="form-control" id="sel1">
                <option>Semua Kategori</option>
                <option>Handphone</option>
                <option>Surat Berharga</option>
                <option>Kartu ATM</option>
                <option>Uang</option>
              </select>
            </div>
          <div class="col-xs-6 col-sm-6 col-md-6 vertical-white-space">
            <label for="lokasi">Lokasi:</label>
            <input type="text" class="form-control" placeholder="contoh: Surabaya">
          </div>
          </div>
        </div>
        <div class="form-group row">
          <span id="expand-parameter-trigger" class="hover-opacity" onclick="expand_parameter_wrapper();">Pencarian lebih detail <i class="fa fa-angle-down"></i></span>
          <span>&nbsp;</span>
        </div>
        <div class="form-group row">
          <div class="col-xs-12 col-sm-6 col-md-6 text-right vertical-white-space">
            <a href="lost.php" class="btn btn-large grey-btn">Cari Barang Hilang</a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 text-left vertical-white-space">
            <a href="found.php" class="btn btn-large grey-btn">Cari Pemilik Barang</a>
          </div>
        </div>
      </foorm>
    </div>
    <img src="assets/images/illust.png" class="illust">
  </div>

  <!-- Modal -->
  <div id="login-required" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content modal-green">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Anda belum login</h4>
        </div>
        <div class="modal-body">
          <p>Silakan login terlebih dahulu, atau lakukan registrasi jika anda belum memiliki akun.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-red" data-dismiss="modal">Registrasi</button>
          <button type="button" class="btn btn-red" data-dismiss="modal">Login</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
