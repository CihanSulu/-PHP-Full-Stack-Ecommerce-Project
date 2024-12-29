<?php 
include("../../php/connect.php");
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
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
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <title>Yönetici Paneli | Yeni Siparişler</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  

  <!-- Left Navbar Start -->
    <?php include("../../php/navbar2.php"); ?>
  <!-- Left Navbar End -->

  


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>İade Olan Siparişler <span class="badge badge-danger">Parfüm</span></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">İade Olanlar Siparişler</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Adı Soyadı</th>
                  <th>Telefon</th>
                  <th>Fiyat</th>
                  <th>Sipariş Tarihi</th>
                  <th>Referans</th>
                  <th>Düzenle</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $query = $conn->query("SELECT * FROM parfum WHERE kayitYontemi = 'iade' order by id DESC", PDO::FETCH_ASSOC);
                  if ( $query->rowCount() ){
                       foreach( $query as $row ){
                            echo '<tr>
                            <td>'.$row['adSoyad'].'</td>
                            <td>'.$row['telefon'].'</td>
                            <td>'.$row['siparisTutar'].' ₺</td>
                            <td>'.$row['tarih'].'</td>
                            <td>'.$row['referans'].'</td>
                            <td><a href="siparis-duzenle?id='.$row['id'].'" class="text-dark">Düzenle <i class="fas fa-edit"></i></a></td>
                          </tr>';
                       }
                  }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
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
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
