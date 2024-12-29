<?php
include("../../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
}
?>
<?php include("../../php/header.php"); ?>
<link rel="stylesheet" type="text/css" href="../../styles/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<title>Yönetici Paneli | Sipariş Düzenle</title>
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
    <?php include("../../php/navbar2.php"); ?>
  <!-- Left Navbar End -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sipariş Oluştur</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="icerikler">Siparişler</a></li>
              <li class="breadcrumb-item active">Sipariş Oluştur</li>
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
              <div class="card-header" style="background: #EFEFEF;">
                <h3 class="card-title text-dark"><span class="text-danger font-weight-bold text-uppercase">Sipariş Oluştur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="manuelDuzenle" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-8">
                      <input type="hidden" name="gizliid">
                      <div class="form-group">
                        <label for="isim">Adı ve Soyadı</label>
                        <input type="text" name="isim" id="isim" class="form-control" placeholder="Adı Soyadı">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="telefon">Telefon</label>
                        <input type="tel" name="telefon" id="telefon" class="form-control" placeholder="Telefon">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="form-group">
                        <label for="sehir">Şehir</label>
                        <select class="form-control" name="sehir" id="sehir">
                          <option value="İstanbul">İstanbul</option>
                          <option value="Ankara">Ankara</option>
                          <option value="İzmir">İzmir</option>
                          <option value="Adana">Adana</option>
                          <option value="Adıyaman">Adıyaman</option>
                          <option value="Afyon">Afyon</option>
                          <option value="Ağrı">Ağrı</option>
                          <option value="Aksaray">Aksaray</option>
                          <option value="Amasya">Amasya</option>
                          <option value="Antalya">Antalya</option>
                          <option value="Ardahan">Ardahan</option>
                          <option value="Artvin">Artvin</option>
                          <option value="Aydın">Aydın</option>
                          <option value="Balıkesir">Balıkesir</option>
                          <option value="Bartın">Bartın</option>
                          <option value="Batman">Batman</option>
                          <option value="Bayburt">Bayburt</option>
                          <option value="Bilecik">Bilecik</option>
                          <option value="Bingöl">Bingöl</option>
                          <option value="Bitlis">Bitlis</option>
                          <option value="Bolu">Bolu</option>
                          <option value="Burdur">Burdur</option>
                          <option value="Bursa">Bursa</option>
                          <option value="Çanakkale">Çanakkale</option>
                          <option value="Çankırı">Çankırı</option>
                          <option value="Çorum">Çorum</option>
                          <option value="Denizli">Denizli</option>
                          <option value="Diyarbakır">Diyarbakır</option>
                          <option value="Düzce">Düzce</option>
                          <option value="Edirne">Edirne</option>
                          <option value="Elazığ">Elazığ</option>
                          <option value="Erzincan">Erzincan</option>
                          <option value="Erzurum">Erzurum</option>
                          <option value="Eskişehir">Eskişehir</option>
                          <option value="Gaziantep">Gaziantep</option>
                          <option value="Giresun">Giresun</option>
                          <option value="Gümüşhane">Gümüşhane</option>
                          <option value="Hakkari">Hakkari</option>
                          <option value="Hatay">Hatay</option>
                          <option value="Iğdır">Iğdır</option>
                          <option value="Isparta">Isparta</option>
                          <option value="Kars">Kars</option>
                          <option value="Kastamonu">Kastamonu</option>
                          <option value="Kayseri">Kayseri</option>
                          <option value="Kırıkkale">Kırıkkale</option>
                          <option value="Kırklareli">Kırklareli</option>
                          <option value="Kırşehir">Kırşehir</option>
                          <option value="Kocaeli">Kocaeli</option>
                          <option value="Konya">Konya</option>
                          <option value="Kütahya">Kütahya</option>
                          <option value="Malatya">Malatya</option>
                          <option value="Manisa">Manisa</option>
                          <option value="Mersin">Mersin</option>
                          <option value="Kahramanmaraş">Kahramanmaraş</option>
                          <option value="Karabük">Karabük</option>
                          <option value="Karaman">Karaman</option>
                          <option value="Kilis">Kilis</option>
                          <option value="Mardin">Mardin</option>
                          <option value="Muğla">Muğla</option>
                          <option value="Muş">Muş</option>
                          <option value="Nevşehir">Nevşehir</option>
                          <option value="Niğde">Niğde</option>
                          <option value="Ordu">Ordu</option>
                          <option value="Osmaniye">Osmaniye</option>
                          <option value="Rize">Rize</option>
                          <option value="Sakarya">Sakarya</option>
                          <option value="Samsun">Samsun</option>
                          <option value="Siirt">Siirt</option>
                          <option value="Sinop">Sinop</option>
                          <option value="Sivas">Sivas</option>
                          <option value="Tekirdağ">Tekirdağ</option>
                          <option value="Tokat">Tokat</option>
                          <option value="Trabzon">Trabzon</option>
                          <option value="Tunceli">Tunceli</option>
                          <option value="Şanlıurfa">Şanlıurfa</option>
                          <option value="Şırnak">Şırnak</option>
                          <option value="Uşak">Uşak</option>
                          <option value="Van">Van</option>
                          <option value="Yalova">Yalova</option>
                          <option value="Yozgat">Yozgat</option>
                          <option value="Zonguldak">Zonguldak</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="ilce">İlçe</label>
                        <input type="ilce" name="ilce" id="ilce" class="form-control" placeholder="İlçe">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <label for="adres">Adres</label>
                      <textarea class="form-control" rows="3" name="adres" id="adres" placeholder="Adres"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <label for="fiyat">Sipariş Tutarı</label>
                      <input type="text" name="fiyat" id="fiyat" class="form-control" placeholder="Sipariş Tutarı">
                      <small class="text-muted ml-1">Sadece Rakam Yazılmalıdır.</small>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <label for="fiyat">Ürün Seçimi</label>
                      <select class="js-select2" multiple="multiple" name="urun[]">
                        <?php 
                        $query = $conn->query("SELECT * FROM icerik", PDO::FETCH_ASSOC);
                        if ( $query->rowCount() ){
                             foreach( $query as $row ){
                                 echo '<option value="'.$row["baslik"].'">'.$row["baslik"].'</option>';
                             }
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <label for="fiyat">Hediye Seçimi</label>
                      <select class="js-select2" multiple="multiple" name="hediye[]">
                       <?php 
                        $query = $conn->query("SELECT * FROM icerik", PDO::FETCH_ASSOC);
                        if ( $query->rowCount() ){
                             foreach( $query as $row ){
                                 echo '<option value="'.$row["baslik"].'">'.$row["baslik"].'</option>';
                             }
                        }
                        ?> 
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <label for="personelnot">Personel Notu</label>
                      <textarea class="form-control" rows="3" name="personelnot" id="personelnot" placeholder="Personel Notu"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <label for="odeme">Ödeme Yöntemi</label><br>
                      <input type="hidden" name="odeme" id="odeme" value="kredi">
                        <button type="button" class="btn secenek activesecenek" id="odeme1">Kapıda Kredi Kartı</button>
                        <button type="button" class="btn secenek" id="odeme2">Kapıda Nakit</button>
                        <button type="button" class="btn secenek" id="odeme3">Şubeye Teslim</button>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <label for="kargo">Kargo Seçimi</label><br>
                      <input type="hidden" id="kargo" name="kargo" value="ptt">
                        <button type="button" class="btn secenek activesecenek" id="kargo1">PTT Kargo ile</button>
                        <button type="button" class="btn secenek" id="kargo2">ARAS Kargo ile</button>
                        <button type="button" class="btn secenek" id="kargo3">MNG Kargo ile</button>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <label for="kayit">Kayıt Durumu</label><br>
                      <input type="hidden" id="kayit" name="kayit" value="yeni">
                        <button type="button" class="btn secenek mb-2 activesecenek" id="kayit1">Yeni Sipariş</button>
                        <button type="button" class="btn secenek mb-2" id="kayit2">Sonra Aranacak</button>
                        <button type="button" class="btn secenek mb-2" id="kayit3">Cevapsız Sipariş</button>
                        <button type="button" class="btn secenek mb-2" id="kayit7">İade Olan Sipariş</button>
                        <button type="button" class="btn secenek mb-2" id="kayit8">Ödemesi Alınan Sipariş</button>
                        <button type="button" class="btn secenek mb-2" id="kayit9">Bedelsiz Sipariş</button>
                        <button type="button" class="btn secenek mb-2" id="kayit4">İptal Sipariş</button>
                        <button type="button" class="btn secenek mb-2" id="kayit5">Onaylı Sipariş</button>
                        <button type="button" class="btn secenek mb-2" id="kayit6">Arşivlenmiş</button>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <center><button type="submit" class="btn btn-primary w-50">Yeni Sipariş Ekle</button></center>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Düzenleme Bölümü Bitiş -->
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
<script type="text/javascript" src="../../scripts/appEdit.js"></script>
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
