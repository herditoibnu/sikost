<?php include('sidebar.php'); ?> 

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Penjaga Kost</h3>
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
            <h2>List Penjaga</h2>
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
                  <th>Kost</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tanggal Lahir</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>


              <tbody>
                <tr>
                  <td>1</td>
                  <td>Anton Sucipto</td>
                  <td>Keputih, Surabaya</td>
                  <td>03/16/1980</td>
                  <td><a href="penjaga_edit.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i> Hapus </a>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Hapus Penjaga</h4>
                          </div>
                          <div class="modal-body">
                            <p>Anda yakin untuk menghapus penjaga?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="penjaga_list.php" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Rudi Hermawan</td>
                  <td>Mulyosari, Surabaya</td>
                  <td>07/12/1981</td>
                  <td><a href="penjaga_edit.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i> Hapus </a>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Hapus Penjaga</h4>
                          </div>
                          <div class="modal-body">
                            <p>Anda yakin untuk menghapus penjaga?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="penjaga_list.php" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Hendrawan</td>
                  <td>Keputih, Surabaya</td>
                  <td>06/30/1979</td>
                  <td><a href="penjaga_edit.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i> Hapus </a>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Hapus Penjaga</h4>
                          </div>
                          <div class="modal-body">
                            <p>Anda yakin untuk menghapus penjaga?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="penjaga_list.php" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </td>
                </tr>
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