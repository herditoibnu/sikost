<?php
    $pesan = "";
    if(isset($_POST['kategori'],$_POST['detail'],$_POST['keterangan'],$_POST['lokasi'])){
            
            // header("Location: formfound.php");
            $pesan = '<div class="alert alert-success alert-dismissable">Data Anda Berhasil Dikirimkan.</div>';
            // exit();
        }
        else {
            // echo "lala";
            $pesan = "";
        }
?>

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
		<div class="panel panel-default login-panel section">
        <div class="panel-heading">
          <h3>Formulir Penemuan</h3>
        </div>
        <div class="panel-body">
	        <div class="container-fluid">
    	      <div class="row">
            	<div class="col-md-12">
              <?php echo $pesan; ?>
            		<form id="add-found" class="temukan-form" method="post" action="formfound.php">
            			<div class="form-group">
            				<label for="sort">Kategori</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi"><i class="fa fa-info-circle"></i></span>
            				<select name="kategori" class="form-control" id="sel1" onchange="getValue(this)">
			              		<option selected disabled>Pilih Kategori</option>
                        <option>Handphone</option>
  			             		<option>Surat Berharga</option>
  			             		<option>Kunci</option>
  			             		<option>Kartu ATM</option>
			              		<option>Uang</option>
			              		<option>Dompet</option>
			              		<option>Lainnya</option>
            				</select>
          			   </div>
		            	 <div class="form-group">
		            		  <label for="sort">Detail Barang</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi"><i class="fa fa-info-circle"></i></span>
		            		  <input type="text" name="detail" class="form-control" id="detail" placeholder="Contoh: 'Handphone Samsung S7 Silver' ">
		            	 </div>
		            	 <div class="form-group">
			            	<label for="sort">Keterangan</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi"><i class="fa fa-info-circle"></i></span>
			            	<textarea name="keterangan" class="form-control" id="detail" placeholder="Waktu penemuan, dsb"></textarea>
		            	 </div>
		            	 <div class="form-group">
			            	<label for="sort">Lokasi</label><span class="input-hint" data-toggle="tooltip" title="Wajib diisi"><i class="fa fa-info-circle"></i></span>
			            	<input name="lokasi" type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi penemuan">
		            	 </div>
		            	 <div class="form-group" id="input-1">
			               <label for="sort">Select File</label>
							       <input type="file" class="form-control">
		            	 </div>
		            	 <div class="text-right">
		              		<!-- <a type="submit" data-toggle="modal" data-target="#berhasil-dikirim" class="btn btn-green">Lapor</button></a> -->
                      <button type="submit" class="btn btn-green">Lapor</button>
		            	 </div>
            		</form>
          	 </div>
            </div>
            </div>
           </div>
          </div>
          <hr>
      </div>
    </div>

<!-- <!-- Modal -->
<div id="berhasil-dikirim" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content modal-green">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Berhasil!<i class="fa fa-check" aria-hidden="true"></i></h4>
      </div>
      <div class="modal-body">
        <p>Data anda berhasil dikirimkan.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div> -->

</body>
</html>
