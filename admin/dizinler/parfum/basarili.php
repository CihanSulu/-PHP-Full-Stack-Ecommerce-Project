<?php
include("../../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
}
?>

<?php 
$query = $conn->query("SELECT * FROM pixel WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
    $fpixel = $query["fpixel"];
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siparişiniz Alındı!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<?php echo $fpixel; ?>
	<style type="text/css">
		body{
			background: url("../../img/breadcrumb.jpg");
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			height: 100%;
		}
		#overlay{
			position: fixed;
			top:0px;
			left:0px;
			height: 100%;
			width: 100%;
			background:rgba(0,0,0,0.9);
			font-family: 'Poppins', sans-serif;
		}
		table{
			font-size:14px;
		}
	</style>
</head>
<body>
	<?php
	$adsoyad = @$_GET["adsoyad"];
	$telefon = @$_GET["telefon"];
	$sehir = @$_GET["sehir"];
	$ilce = @$_GET["ilce"];
	$adres = @$_GET["adres"];
	$siparisTutar = @$_GET["siparisTutar"];
	$urun = @$_GET["urun"];
	$hediye = @$_GET["hediye"];
	$personelNot = @$_GET["personelNot"];
	$referans = @$_GET["referans"];
	$odemeYontemi = @$_GET["odemeYontemi"];
	$kargoYontemi = @$_GET["kargoYontemi"];
	$kayitYontemi = @$_GET["kayitYontemi"];
	?>
	<div id="overlay">
		<div class="container">
			<div class="row pt-5 pl-sm-3 pl-3 pr-sm-3 pr-3">
				<div class="col-md-6 rounded shadow mx-auto bg-white p-0">
					<div class="card">
						<div class="card-header bg-white"><h5 class="font-weight-light m-0"><strong>Sayın <span class="text-primary">Cihan Sulu </span><span>Siparişiniz Başarıyla Alındı</span></strong></h5></div>
						<div class="card-body">
							<table>
								<tr>
									<td>İsim Soyisim : </td>
									<td class="font-weight-bold">Cihan Sulu</td>
								</tr>
								<tr>
									<td>Telefon :</td>
									<td class="font-weight-bold">0(551) 9** ****</td>
								</tr>
								<tr>
									<td>Şehir / İlçe</td>
									<td class="font-weight-bold">İstanbul / T**</td>
								</tr>
								<tr>
									<td>Adres</td>
									<td class="font-weight-bold">Yenimahalle 51*****</td>
								</tr>
							</table><br>
							<p class="m-0 text-center text-primary">Otomatik Yönlendiriliyorsunuz...</p>
						</div>
						<div class="card-footer text-center">
							<small>En kısa sürede siparişiniz hakkında iletişim kurulacaktır.</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>