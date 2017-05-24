<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIKOST</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index2.php" class="site_title"><i class="fa fa-home"></i> <span>SIKOST</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/gambar_sidebar.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang</span>
                <h2>Penjaga Kost</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Kost 1</h3>
                <ul class="nav side-menu">
                  <li><a href="kamar_list4.php"><i class="fa fa-home"></i> List Kamar </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="kamar_list4.php">List Kamar</a></li>
                      <li><a href="kamar_tambah.php">Tambah Kamar</a></li>
                    </ul> -->
                  </li>
                 <li><a href="penghuni_tambah.php"><i class="fa fa-edit"></i> Penghuni Kost </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="penjaga_list.php">List Penghuni</a></li>
                      <li><a href="penjaga_tambah.php">Tambah Penghuni</a></li>
                    </ul> -->
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
              <!--     <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/gambar_sidebar.jpg" alt="">Pemilik Kost
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li> -->
                <li><a href="login.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a style="pointer-events: none; cursor: default;">
                        <span class="image"><img src="images/gambar_sidebar.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Kost 1 - Kamar 1</span>
                          <span class="time">Belum Membayar</span>
                        </span>
                        <span class="message">
                          Pembayaran Jatuh Tempo: 05/12/2017
                        </span>
                      </a>
                    </li>
                    <li>
                      <a style="pointer-events: none; cursor: default;">
                        <span class="image"><img src="images/gambar_sidebar.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Kost 1 - Kamar 4</span>
                          <span class="time">Belum Membayar</span>
                        </span>
                        <span class="message">
                          Pembayaran Jatuh Tempo: 05/10/2017
                        </span>
                      </a>
                    </li>
                    <li>
                      <a style="pointer-events: none; cursor: default;">
                        <span class="image"><img src="images/gambar_sidebar.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Kost 2 - Kamar 3</span>
                          <span class="time">Belum Membayar</span>
                        </span>
                        <span class="message">
                          Pembayaran Jatuh Tempo: 05/09/2017
                        </span>
                      </a>
                    </li>
                   <!--  <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li> -->
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
