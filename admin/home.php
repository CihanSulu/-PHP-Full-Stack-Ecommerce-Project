<?php
include("php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: index");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<title>Yönetici Paneli | Anasayfa</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  

  <!-- Left Navbar Start -->
    <?php include("php/navbar.php"); ?>
  <!-- Left Navbar End -->

  <?php 
  $sorgu = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='yeni'");
  $sorgu->execute();
  $yeni = $sorgu->fetchColumn();

  $sorgu2 = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='sonra'");
  $sorgu2->execute();
  $sonra = $sorgu2->fetchColumn();

  $sorgu3 = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='cevapsiz'");
  $sorgu3->execute();
  $cevapsiz = $sorgu3->fetchColumn();

  $sorgu4 = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='iptal'");
  $sorgu4->execute();
  $iptal = $sorgu4->fetchColumn();

  $sorgu5 = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='onay'");
  $sorgu5->execute();
  $onay = $sorgu5->fetchColumn();

  $sorgu6 = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='arsiv'");
  $sorgu6->execute();
  $arsiv = $sorgu6->fetchColumn();

  $sorgu7 = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='iade'");
  $sorgu7->execute();
  $iade = $sorgu7->fetchColumn();

  $sorgu8 = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='odeme'");
  $sorgu8->execute();
  $odeme = $sorgu8->fetchColumn();

  $sorgu9 = $conn->prepare("SELECT COUNT(*) FROM parfum WHERE kayitYontemi='bedelsiz'");
  $sorgu9->execute();
  $bedelsiz = $sorgu9->fetchColumn();


  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Panel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Panel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $yeni; ?></h3>

                <p>Yeni Sipariş</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="dizinler/parfum/yeni-siparisler" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $onay; ?></h3>

                <p>Onaylanan Sipariş</p>
              </div>
              <div class="icon">
                <i class="fas fa-check"></i>
              </div>
              <a href="dizinler/parfum/onayli-siparisler" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $sonra; ?></h3>

                <p>Daha Sonra Aranacaklar</p>
              </div>
              <div class="icon">
                <i class="fas fa-phone-volume"></i>
              </div>
              <a href="dizinler/parfum/sonra-aranacaklar" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $cevapsiz; ?></h3>

                <p>Cevapsız Siparişler</p>
              </div>
              <div class="icon">
                <i class="fas fa-phone-slash"></i>
              </div>
              <a href="dizinler/parfum/cevapsiz-siparisler" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3><?php echo $iade; ?></h3>

                <p>İade Olan Siparişler</p>
              </div>
              <div class="icon">
                <i class="fas fa-backspace"></i>
              </div>
              <a href="dizinler/parfum/iade-olan-siparisler" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3><?php echo $odeme; ?></h3>

                <p>Ödemesi Alınan Siparişler</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-check"></i>
              </div>
              <a href="dizinler/parfum/odemesi-alinan-siparisler" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $bedelsiz; ?></h3>

                <p>Bedelsiz Siparişler</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-check-alt"></i>
              </div>
              <a href="dizinler/parfum/bedelsiz-siparisler" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $iptal; ?></h3>

                <p>İptal Edilenler</p>
              </div>
              <div class="icon">
                <i class="fas fa-slash"></i>
              </div>
              <a href="dizinler/parfum/iptal-siparisler" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $arsiv; ?></h3>

                <p>Arşivlenen Siparişler</p>
              </div>
              <div class="icon">
                <i class="fas fa-archive"></i>
              </div>
              <a href="dizinler/parfum/arsiv" class="small-box-footer">Daha Fazla Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.3
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
