<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Daftar Penemuan | TEMUKAN</title>

  <?php include 'include.php'; ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php include('navbar2.php'); ?>


  <div class="container-fluid main">
    <div class="container" style="margin-top:1em;">
      <div class="col-md-3">
        <div class="container-fluid section">
        <h3>Filter Pencarian</h3>
        <form id="login-form" class="temukan-form">
          <div class="form-group">
            <input type="text" class="form-control" id="search" name="search" placeholder="Kata kunci">
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1">
              <option>Semua Kategori</option>
              <option>Handphone</option>
              <option>Surat Berharga</option>
              <option>Kartu ATM</option>
              <option>Uang</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi">
          </div>
          <div class="text-right">
            <button type="submit" class="btn btn-green full-width">Terapkan</button>
          </div>
        </form>
      </div>
    </div>
      <div class="col-md-9">
        <div class="container-fluid section">
          <span>Hasil pencarian untuk kata kunci "keyword"</span>
        </div>

        <div class="container-fluid nav-tab">
          <div class="col-md-6 item-tab">
            <a href="lost.php" class="row">Daftar Kehilangan</a>
          </div>
          <div class="col-md-6 item-tab">
            <a href="found.php" class="row active">Daftar Penemuan</a>
          </div>
        </div>

        <div class="container-fluid section">
          <div class="row">
            <div class="col-md-6">
              <h3>Daftar Penemuan</h3>
            </div>
            <div class="col-md-6 text-right">
              <form id="login-form" class="temukan-form">
                <label for="sort">Urutkan</label>
                <select class="form-control" id="sort">
                  <option>Tanggal posting terbaru</option>
                  <option>Tanggal posting terlama</option>
                  <option>Tanggal penemuan terbaru</option>
                  <option>Tanggal penemuan terlama</option>
                </select>
              </form>
            </div>
          </div>
          <hr>
          <div class="row">

            <?php for($i=0;$i<12;$i++){ ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="container-fluid item">
                <div class="image">
                  <a href="#"><div class="img" style="background-image:url('assets/images/dummy.jpg');"></div></a>
                </div>
                <div class="title">
                  <a href="#" title="Telah ditemukan sebuah kunci sepeda motor honda vario di sekitaran keputih">Telah ditemukan sebuah kunci sepeda motor honda vario di sekitaran keputih</a>
                </div>
                <div class="detail">
                  <hr class="margin-0p5">
                  <i class="fa fa-user-circle"></i>Wira Mahardika<br>
                  <i class="fa fa-map-marker"></i>Keputih, Surabaya<br>
                  <i class="fa fa-tags"></i>Kunci motor<br>
                  <hr class="margin-0p5">
                  <i>Diposting pada 17/08/2017</i><br>
                  <i>Ditemukan sejak 17/08/2017</i>
                  <hr class="margin-0p5">
                </div>
                <div class="container-fluid view-button">
                  <a class="btn btn-red full-width" data-toggle="modal" data-target="#view-item">LIHAT</a>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>

          <div class="row text-center">
            <ul class="pagination temukan-pagination">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="view-item" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content modal-green">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Telah hilang sebuah kunci sepeda motor honda vario di sekitaran keputih</h4>
        </div>
        <div class="modal-body">
          <p class="dark-grey-text">Diposting pada 17/08/2017</p>
          <img src="assets/images/dummy.jpg" class="img-responsive">
          <hr>
          <h4><b>Deskripsi</b></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et ipsum gravida turpis fringilla facilisis. Praesent ultrices nunc et odio porttitor tristique. Sed sed ullamcorper ligula. Fusce eget enim quis diam aliquam fermentum. Ut non posuere quam. Maecenas non odio sapien. Nullam tincidunt luctus orci vitae tincidunt.</p>
          <hr>
          <h4><b>Ditemukan di</b></h4>
          <p>Keputih, Surabaya</p>
          <p class="dark-grey-text">pada 17/08/2017</p>
          <hr>
          <h4><b>Hubungi</b></h4>
          <i class="dark-grey-text">Bila anda merasa memiliki barang tersebut, silakan untuk menghubungi kontak berikut</i><br><br>
          <div class="panel panel-default contact">
            <div class="panel-heading">Wira Mahardika</div>
            <div class="panel-body">
              <p><i class="fa fa-phone"></i>081234567890</p>
              <p><i class="fa fa-envelope"></i>mail@example.com</p>
              <p><i class="fa fa-map-marker"></i>Jl. Teknik Kimia, Keputih, Sukolilo, Kota SBY, Jawa Timur 60117</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
