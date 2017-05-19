<div id="overlay" class="overlay" onclick="hide_sidebar()"></div>
<div class="float-header">
  <div class="container-fluid menu-wrapper">
    <div class="col-xs-1">
      <i id="show-sidebar-trigger" class="fa fa-bars icon-menu hover-opacity" onclick="show_sidebar();"></i>
      <i id="hide-sidebar-trigger" class="fa fa-close icon-menu hover-opacity hide" onclick="hide_sidebar();"></i>
    </div>
    <div class="col-xs-7">
      <h3><b>TEMUKAN</b><span style="font-size:0.5em;">.com</span></h3>
    </div>
    <div class="col-xs-4 text-right">
      <a href="register.php" class="btn btn-red hide-on-small">Registrasi</a>
      <a href="login.php" class="btn btn-white hide-on-small">Login</a>
    </div>
  </div>
</div>
<div id="sidebar" class="sidebar">
  <div class="container-fluid sidebar-section">
    <div class="col-xs-6">
      <a href="register.php" class="btn btn-grey btn-large full-width">Registrasi</a>
    </div>
    <div class="col-xs-6">
      <a href="login.php" class="btn btn-grey btn-large full-width">Login</a>
    </div>
  </div>
  <hr>
  <div class="container-fluid sidebar-section">
    <ul>
      <li>
        <a class="active" href="index.php"><i class="fa fa-search"></i> Pencarian</a>
        <a class="pointer-hover" data-toggle="modal" data-target="#new-post"><i class="fa fa-bullhorn"></i> Buat Pengumuman</a>
        <a href="lost.php"><i class="fa fa-th"></i> Daftar Kehilangan</a>
        <a href="found.php"><i class="fa fa-th"></i> Daftar Penemuan</a>
      </li>
    </ul>
  </div>
</div>

<!-- Modal -->
<div id="new-post" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content modal-green">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pilih jenis pengumuman anda</h4>
      </div>
      <div class="modal-body text-center">
        <a href="formlost.php" type="button" class="btn btn-large btn-grey">Saya kehilangan sesuatu</a>
        <a href="formfound.php" type="button" class="btn btn-large btn-grey">Saya menemukan sesuatu</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
