<?php 
  session_start();
  include "inc/koneksi.php";
  if(!isset($_SESSION['username']))//ketika user tidak di set (! isset)
  {
    header('location:index.php');
  
  }
  else
  {
    $nama_lengkap = $_SESSION['nama_lengkap'];
    $username = $_SESSION['username'];
    $level = $_SESSION['level'];

  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<!-- ini header -->
  <?php include "header.php" ?>

<!-- klose header -->

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php include "menu.php" ?>
  <!-- =============================================== -->


  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 




    if (isset($_GET['page'])) {
      $page =$_GET['page'];
      # code...
    }
    else{
      $page ='dashboard';
    }
    switch ($page) {
      case 'suratmasuk':
        include'surat_masuk.php';
        break;

      case 'fsuratmasuk':
        include'fsurat_masuk.php';
        break;

     case 'isuratmasuk':
        include'isurat_masuk.php';
        break;

    case 'hsuratmasuk':
        include'hsurat_masuk.php';
        break;
    case 'esuratmasuk':
        include'esurat_masuk.php';
        break;
    case 'usuratmasuk':
        include'usurat_masuk.php';
        break;
    case 'lsuratmasuk':
        include'lsurat_masuk.php';
        break;

    case 'user':
        include'user/user.php';
        break;
    case 'iuser':
        include'user/iuser.php';
        break;
    case 'edit':
        include'user/edit.php';
        break;


    case 'fsurat2':
        include'fsurat2.php';
        break;

    case 'user':
        include'user.php';
        break;
      
      
      default:
        include'dashboard.php';
        break;
    }

    ?>
    <!-- /.content -->
  </div>

  

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
