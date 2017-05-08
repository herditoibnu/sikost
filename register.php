<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Registrasi | TEMUKAN</title>

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

  <div class="container-fluid main">
    <div class="container" style="margin-top:1em;">
      <div class="alert alert-red login-panel hide" style="margin-bottom:1em;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Login gagal.</strong> Username atau password salah.
      </div>
      <div class="panel panel-default login-panel">
        <div class="panel-heading">
          REGISTRASI<br>
          <span>Sudah punya akun? Silakan <a href="login.php">login disini</a>.</span>
        </div>
        <div class="panel-body">
          <form id="registration-form" method="POST" action="actionRegister.php" class="temukan-form">
            <div class="form-group">
              <label for="name">Nama</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi"><i class="fa fa-info-circle"></i></span>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="email">Email</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi dengan format email yang benar"><i class="fa fa-info-circle"></i></span>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi, minimal 6 karakter"><i class="fa fa-info-circle"></i></span>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="phone">Nomor Telepon</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi"><i class="fa fa-info-circle"></i></span>
              <input type="number" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="address">Alamat</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi"><i class="fa fa-info-circle"></i></span>
              <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-green">Registrasi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
