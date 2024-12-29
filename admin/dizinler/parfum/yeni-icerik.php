<?php 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
}
?>
<?php include("../../php/header.php"); ?>
<title>Yönetici Paneli | İçerik Ekle</title>
<style type="text/css">
  .note-editable p{
    height: 150px !important;
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<div class="alertbx">sdsd</div>  

  <!-- Left Navbar Start -->
    <?php include("../../php/navbar2.php"); ?>
  <!-- Left Navbar End -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Yeni İçerik Ekle</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
              <li class="breadcrumb-item active">Yeni İçerik Ekle</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">İçerik Oluştur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="form1" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="icerikbaslik">Ürün Başlığı</label>
                    <input type="text" class="form-control" id="icerikbaslik" placeholder="Ürün Başlığı" name="baslik">
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                      <label for="urunfiyat">Ürün Fiyatı</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="urunfiyat" name="fiyat" placeholder="Ürün Fiyatı(99.90)">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fas fa-lira-sign"></i></span>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                      <label for="uruneskifiyat">Ürün Eski Fiyatı</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="uruneskifiyat" name="uruneskifiyat" placeholder="Ürün Eski Fiyatı">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fas fa-lira-sign"></i></span>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="stok">Stok Adedi</label>
                    <input type="number" class="form-control" id="stok" placeholder="Stok Adedi" name="stok">
                  </div>
                  <div class="form-group">
                    <label for="kategori">Ürün Kategorisi</label>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox float-left mr-4">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="erkek" name="kategorierkek">
                          <label for="customCheckbox1" class="custom-control-label"><span style="margin-left:-15px;">Erkek Parfümleri</span></label>
                        </div>
                        <div class="custom-control custom-checkbox float-left mr-4">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="bayan" name="kategoribayan">
                          <label for="customCheckbox2" class="custom-control-label"><span style="margin-left:-15px;">Bayan Parfümleri</span></label>
                        </div>
                        <div class="custom-control custom-checkbox float-left">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="unisex" name="kategoriunisex" checked>
                          <label for="customCheckbox3" class="custom-control-label"><span style="margin-left:-15px;">Unisex Parfümleri</span></label>
                        </div>
                    </div>
                  </div><br>
                  <div class="form-group">
                    <label for="fileUp">Ürün Resimi</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="fileUp" name="fileUp">
                      <label class="custom-file-label" for="fileUp">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="aciklama">Ürün Açıklaması</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="aciklama" name="aciklama"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="onecikarilan">Öne Çıkarılan Bölümüne Eklensin Mi ? </label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="customRadio" name="onecikarilan" value="EVET">
                      <label class="custom-control-label" for="customRadio">EVET</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="customRadio2" name="onecikarilan" value="HAYIR" checked>
                      <label class="custom-control-label" for="customRadio2">HAYIR</label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="onecikarilan">Sizin İçin Seçtiklerimiz Bölümüne Eklensin Mi ? </label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="customRadio3" name="onecikarilan2" value="EVET">
                      <label class="custom-control-label" for="customRadio3">EVET</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="customRadio4" name="onecikarilan2" value="HAYIR" checked>
                      <label class="custom-control-label" for="customRadio4">HAYIR</label>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <center><button type="button" id="btn1" class="btn btn-primary w-50">Ürün Ekle</button></center>
                </div>
              </form>
            </div>

          </div>
        </div>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript" src="scripts/app.js"></script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>
