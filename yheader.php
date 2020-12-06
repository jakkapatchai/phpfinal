<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://nickzaahhaahha.github.io/HCI_work6/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!--
เนื่องจากมีปัญหาการ load font ข้ามเครื่อง ผ่านแฟ้ม all.min.css
จึงเพิ่มการกำหนด font-face และเรียกแฟ้มใน current folder
- https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css
- https://www.farahimpex.com/vendor/jeroennoten/laravel-adminlte/resources/assets/vendor/font-awesome/webfonts/
github.io
- https://nickzaahhaahha.github.io/HCI_work6/
- https://github.com/Nickzaahhaahha/HCI_work6
- https://nickzaahhaahha.github.io/HCI_work6/fontawesome-free/css/all.min.css
- http://thaiall.github.io/www/adminlte/adminlte_github.htm
--> 
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="northwind.php" class="nav-link">Northwind</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
	      <a href="pyramid/com_all.php" class="nav-link">pyramid36</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
	      <a href="s0-s7/s0-s7.php" class="nav-link">s0 - s7</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form action="http://www.google.com" class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
          <img src="https://jakkapatchai.github.io/home/jakkapat.jpg" alt="User Image" style="height:30px;">
        <div class="info">
          <a href="https://jakkapatchai.github.io/home/index.html" class="d-block">Jakkapat</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <!-- li class="nav-item has-treeview menu-open" -->

          <li class="nav-item has-treeview menu-close">
            <a href="http://www.thaiall.com/me" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                จักรพัฒน์ ไชยแก้ว
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://jakkapatchai.github.io/home/me.htm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About me</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://www.youtube.com/channel/UCWrZ6-Gu2lkYqHD2vtHjufw/featured?view_as=subscriber" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>youtube</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://web.facebook.com/jakkapatcom" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Facebook</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="https://jakkapatchai.github.io/home/pyramid.htm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pyramid</p>
                </a>
              </li>                 
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="http://www.thaiall.com/me" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Java
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://github.com/jakkapatchai/java_pyramid" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pyramid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/jakkapatchai/java_max_min" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Max Min</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/jakkapatchai/java_bufferedReader" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BufferReader</p>
                </a>
              </li>               
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="http://www.thaiall.com/me" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PHP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://github.com/jakkapatchai/com_php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pyramid</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-close"></li>
              <li class="nav-item">
                <a href="https://github.com/jakkapatchai/phpmyadmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Northwind</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="http://www.thaiall.com/me" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                โครงสร้างข้อมูล
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://github.com/jakkapatchai/CPSC231" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All file</p>
                </a>
              </li>        
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="http://www.thaiall.com/me" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                HCI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://github.com/jakkapatchai/adminlte-3.0.4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aminlte</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/jakkapatchai/CPSC321_HCI/blob/gh-pages/Huawei%20Mate%20Xs.jpg" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เทคโนโลยีทันสมัย</p>
                </a>
              </li>               
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="http://www.thaiall.com/me" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Project
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/cosmetic.pdf" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ระบบขายเครื่องสำอาง</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/03.pdf" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ระบบจัดการร้านเบเกอรี่</p>
                </a>
              </li>               
            </ul>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Main content -->
    