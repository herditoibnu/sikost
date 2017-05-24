<?php include('sidebar.php'); ?> 

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Kost 3</h3>
      </div>

     <!--  <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div> -->
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Kamar</h2>
            <!--         <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="kamar_list3.php" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Kamar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" value="1" placeholder="Nomor Kamar Kost" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <!--   <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12"> -->
                        <select id="kamar" class="form-control" required>
                          <option value="" selected disabled>Pilih Kategori</option>
                          <option value="reguler" selected>Reguler</option>
                          <option value="ac">AC</option>
                          <option value="km">Kamar Mandi Dalam</option>
                          <option value="ackm">AC + Kamar Mandi Dalam</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Kamar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <!--   <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12"> -->
                        <select id="kamar" class="form-control" required>
                          <option value="" selected disabled>Pilih Status Kamar</option>
                          <option value="isi" selected>Isi</option>
                          <option value="kosong">Kosong</option>
                        </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pembayaran Terakhir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <!--   <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12"> -->
                        <select id="kamar" class="form-control" required>
                          <option value="" selected disabled>Pilih Status Pembayaran</option>
                          <option value="sbayar" selected>Sudah Bayar</option>
                          <option value="bbayar">Belum Bayar</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pembayaran Jatuh Tempo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="first-name"  placeholder="Tanggal Lahir Penjaga" required="required" class="form-control col-md-7 col-xs-12"> -->     
                          <input type="text" class="form-control has-feedback-left col-md-7 col-xs-12" id="single_cal1" aria-describedby="inputSuccess2Status" value="06/14/2017">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                          <span id="inputSuccess2Status" class="sr-only">(success)</span>
                   
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="kamar_list3.php" class="btn btn-primary">Batal</a>
                          <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->

<?php include('footer.php'); ?> 