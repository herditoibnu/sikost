<?php include('sidebar.php'); ?> 

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Kost 1</h3>
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
            <h2>List Kamar</h2>
           <!--  <ul class="nav navbar-right panel_toolbox">
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
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nomor Kamar</th>
                  <th>Kategori</th>
                  <th>Status Kamar</th>
                  <th>Pembayaran Terakhir</th>
                  <th>Pembayaran Jatuh Tempo</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>


              <tbody>
                <?php for($i=0;$i<5;$i++){ ?>
                <tr>
                  <td><?php echo $i+1;?></td>
                  <td>Reguler</td>
                  <td>Isi</td>
                  <td style="background-color: green; color: white;">Sudah Bayar</td>
                  <td>06/14/2017</td>
                  <td><a href="kamar_edit.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i> Hapus </a>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Hapus Kamar</h4>
                          </div>
                          <div class="modal-body">
                            <p>Anda yakin untuk menghapus kamar?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="kamar_list.php" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </td>
                </tr>
                <?php } ?>
                <?php for($i=0;$i<5;$i++){ ?>
                <tr>
                  <td><?php echo $i+6;?></td>
                  <td>AC</td>
                  <td>Kosong</td>
                  <td style="background-color: red; color: white;">Belum Bayar</td>
                  <td>05/18/2017</td>
                  <td> <a href="kamar_edit.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i> Hapus </a>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Hapus Kamar</h4>
                          </div>
                          <div class="modal-body">
                            <p>Anda yakin untuk menghapus kamar?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="kamar_list.php" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </td>
                </tr>
                <?php } ?>
                <?php for($i=0;$i<5;$i++){ ?>
                <tr>
                  <td><?php echo $i+11;?></td>
                  <td>Kamar Mandi Dalam</td>
                  <td>Isi</td>
                  <td style="background-color: green; color: white;">Sudah Bayar</td>
                  <td>06/20/2017</td>
                  <td> <a href="kamar_edit.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i> Hapus </a>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Hapus Kamar</h4>
                          </div>
                          <div class="modal-body">
                            <p>Anda yakin untuk menghapus kamar?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="kamar_list.php" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </td>
                </tr>
                <?php } ?>
                <?php for($i=0;$i<5;$i++){ ?>
                <tr>
                  <td><?php echo $i+16;?></td>
                  <td>AC + Kamar Mandi Dalam</td>
                  <td>Kosong</td>
                  <td style="background-color: red; color: white;">Belum Bayar</td>
                  <td>05/19/2017</td>
                  <td> <a href="kamar_edit.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i> Hapus </a>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Hapus Kamar</h4>
                          </div>
                          <div class="modal-body">
                            <p>Anda yakin untuk menghapus kamar?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="kamar_list.php" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->

<?php include('footer.php'); ?> 