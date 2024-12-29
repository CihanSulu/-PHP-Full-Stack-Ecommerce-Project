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
<link rel="stylesheet" type="text/css" href="styles/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<title>Yönetici Paneli | Hesabım</title>
<style type="text/css">
  .note-editable p{
    height: 150px !important;
  }
  .sml{
    font-size:14px;
  }
  .minhg{
    min-height: 80px;
  }
  .secenek{
    background:#E5E5E5;
    margin-right: 10px;
  }
  .card-title{
    font-size:14px;
  }
  .activesecenek,.activesecenek:hover{
    background:#DC3545;
    color:#fff;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
  }
  .secenek:hover{
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<div class="alertbx"></div>  

  <!-- Left Navbar Start -->
    <?php include("php/navbar.php"); ?>
  <!-- Left Navbar End -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Hesabım</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
              <li class="breadcrumb-item active">Hesabım</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Düzenleme Bölümü Başlangıç -->
        <div class="row">
          <div class="col">
            <div class="card card-primary">
              <div class="card-header bg-success">
                <h3 class="card-title text-dark"><span class="text-white font-weight-bold text-uppercase">Hesap Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="hesap1" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-7 mx-auto">
                      <div class="form-group">
                        <label for="kullaniciadi1">Kullanıcı Adınız</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" disabled id="kullaniciadi1">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-7 mx-auto">
                      <div class="form-group">
                        <label for="sifre1">Yeni Şifre</label>
                        <input type="password" name="password" class="form-control" value="" id="sifre1">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-7 mx-auto">
                      <div class="form-group">
                        <label for="sifre11">Yeni Şifre Tekrar</label>
                        <input type="password" name="password2" class="form-control" value="" id="sifre11">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-7 mx-auto">
                      <center><button type="button" value="Kullanıcı Bilgilerini Değiştir" id="btnx1" class="btn btn-primary">Kullanıcı Bilgilerini Değiştir</button></center>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Düzenleme Bölümü Bitiş -->


        <!-- Hesap Ekle Bölümü Başlangıç -->
        <div class="row">
          <div class="col">
            <div class="card card-primary">
              <div class="card-header bg-primary">
                <h3 class="card-title text-dark"><span class="text-white font-weight-bold text-uppercase">Yeni Kullanıcı Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="hesap2" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-7 mx-auto">
                      <div class="form-group">
                        <label for="kullaniciadi">Yeni Kullanıcı Adı</label>
                        <input type="text" id="kullaniciadi" name="username" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-7 mx-auto">
                      <div class="form-group">
                        <label for="sifre">Yeni Şifre</label>
                        <input type="password" name="password" class="form-control" value="" id="sifre">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-7 mx-auto">
                      <div class="form-group">
                        <label for="sifre2">Yeni Şifre Tekrar</label>
                        <input type="password" name="password2" class="form-control" value="" id="sifre2">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-7 mx-auto">
                      <center><button type="button" id="btnx2" value="Yeni Kullanıcı Ekle" class="btn btn-primary">Yeni Kullanıcı Ekle</button></center>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Hesap Ekle Bölümü Bitiş -->




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
<script src="scripts/control.js"></script>
<script type="text/javascript" src="scripts/appEdit.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
$("#devam").click(function(){
  $(".aciklamahidden").css("height","auto");
  $(this).css("display","none");
});

$(".js-select2").select2({
      closeOnSelect : false,
      placeholder : "Placeholder",
      allowHtml: true,
      allowClear: true,
      tags: true // создает новые опции на лету
    });

      $('.icons_select2').select2({
        width: "100%",
        templateSelection: iformat,
        templateResult: iformat,
        allowHtml: true,
        placeholder: "Placeholder",
        dropdownParent: $( '.select-icon' ),//обавили класс
        allowClear: true,
        multiple: false
      });
  

        function iformat(icon, badge,) {
          var originalOption = icon.element;
          var originalOptionBadge = $(originalOption).data('badge');
         
          return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '<span class="badge">' + originalOptionBadge + '</span></span>');
        }
</script>
</body>
</html>
