<div id="overlay" class="overlay" onclick="hide_sidebar()"></div>
<div class="float-header">
  <div class="container-fluid menu-wrapper">
    <div class="col-xs-1">
      <i id="show-sidebar-trigger" class="fa fa-bars icon-menu hover-opacity" onclick="show_sidebar();"></i>
      <i id="hide-sidebar-trigger" class="fa fa-close icon-menu hover-opacity hide" onclick="hide_sidebar();"></i>
    </div>
    <div class="col-xs-7">
      <h3><b>SIKOST</b><span style="font-size:0.5em;">.com</span></h3>
    </div>
    <div class="col-xs-4 text-right">
      <button class="btn btn-white hide-on-small" data-toggle="modal" data-target="#new-post"><i class="fa fa-bullhorn" style="margin-right:1em;"></i>Buat Pengumuman</a></button>
    </div>
  </div>
</div>
<div id="sidebar" class="sidebar">
  <div class="container-fluid sidebar-section">
    <ul>
      <li>
        <a class="active" href="index.php"><i class="fa fa-search"></i> Pencarian</a>
        <a class="pointer-hover" data-toggle="modal" data-target="#new-post"><i class="fa fa-bullhorn"></i> Buat Pengumuman</a>
        <a href="lost.php"><i class="fa fa-th"></i> Daftar Kehilangan</a>
        <a href="found.php"><i class="fa fa-th"></i> Daftar Penemuan</a>
        <a class="pointer-hover" data-toggle="modal" data-target="#logout"><i class="fa fa-power-off"></i> Logout</a>
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

<!-- Modal -->
<div id="logout" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content modal-green">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Konfirmasi Logout</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin logout?</p>
      </div>
      <div class="modal-footer">
        <a href="index.php" type="button" class="btn btn-red">Logout</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
