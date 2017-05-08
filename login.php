<?php
    $error = "";
    if(isset($_POST['email'],$_POST['password'])){
 
        /*** You can change username & password ***/
        $user = array(
                        "user" => "budi@gmail.com",
                        "pass"=>"123"          
                );
        $username = $_POST['email'];
        $pass = $_POST['password'];
        if($username == $user['user'] && $pass == $user['pass']){
            session_start();
            $_SESSION['simple_login'] = $username;
            header("Location: found.php");
            exit();
        }
        else{
            // echo "lala";
            $error = '<div class="alert alert-danger">Invalid Login</div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login | TEMUKAN</title>

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
    <div class="container" style="margin-top:8em;">
      <div class="alert alert-red login-panel hide" style="margin-bottom:1em;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Login gagal.</strong> Username atau password salah.
      </div>
      <div id="change_pwd_alert" class="alert alert-green login-panel hide" style="margin-bottom:1em;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Password telah diatur ulang.</strong> Silakan cek email anda untuk melihat password baru.
      </div>
      <div class="panel panel-default login-panel">
        <div class="panel-heading">LOGIN</div>
        <div class="panel-body">
        <?php echo $error; ?>
          <form id="login-form" class="temukan-form" method="post" action="login.php">
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" autofocus="">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="row">
              <div class="col-md-6" style="padding-top:10px;">
                <a class="pointer-hover" data-toggle="modal" data-target="#forgot-password">Lupa password</a>
              </div>
              <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-green">Login</button>
              </div>
            </div>
          </form>
        </div>
        <hr class="margin-0p5">
        <div class="text-center" style="margin:1.5em;">
          Belum punya akun? Silakan <a href="register.php">registrasi disini</a>.
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="forgot-password" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content modal-green">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi lupa password</h4>
        </div>
        <div class="modal-body">
          Silakan tulis email yang anda gunakan untuk mendaftar di temukan.com, kami akan mengirimkan password baru anda ke email tersebut.<br><br>
          <form id="registration-form" class="temukan-form">
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" autofocus="" required>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-green" onclick="change_pwd_success();">Kirim</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
