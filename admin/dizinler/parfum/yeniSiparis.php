<?php 
include("../../php/connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		thead{
			font-weight: bold;
			background-color: #f1f1f1;
		}
	</style>
</head>
<body id="content">
<div class="container-fluid">
	<div class="row">
		<div class="col-6"><img src="http://parfumsihri.com/assets/images/logo.png" height="50"></div>
		<div class="col-6 font-weight-bold p-3 text-right">Sipariş Takip Formu</div>
	</div>
</div>


<div class="container-fluid">
	<div class="row">
		<div class="col">
			<table class="table table-striped" >
				<thead>
					<tr>
						<td>Müşteri</td>
						<td>Adres</td>
						<td>Telefon / Ödeme</td>
						<td>Ürünler</td>
						<td>Tutar</td>
					</tr>
				</thead>
				<tbody>
					<?php 
					$query = $conn->query("SELECT * FROM parfum WHERE kayitYontemi='onay'", PDO::FETCH_ASSOC);
					if ( $query->rowCount() ){
					     foreach( $query as $row ){
							$isim = $row["adSoyad"];
							$ilce = $row["ilce"];
							$sehir = $row["sehir"];
							$adres = $row["adres"];
							$telefon = $row["telefon"];
							$odeme = $row["odemeYontemi"];
							$urun = $row["urun"];
							$hediye = $row["hediye"];
							$tutar = $row["siparisTutar"];

							if($odeme == "kredi")
								$odeme = "Kapıda Kredi Kartı";
							else
								$odeme = "Kapıda Nakit Ödeme";

							echo '<tr>
								<td>'.$isim.'</td>
								<td style="width:30px!important;">'.$adres.'<br><br>'.$sehir.'/'.$ilce.'</td>
								<td>'.$telefon.' <br><br> '.$odeme.'</td>
								<td>'.str_replace('_','',$urun).' <hr> '.str_replace('_','',$hediye).'</td>
								<td>'.$tutar.' ₺</td>
							</tr>';
					     }
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	<?php 
		date_default_timezone_set('Europe/Istanbul');
		$tarih = date('d-m-Y');
	?>
	var element = document.getElementById('content');
	var opt = {
	  filename:     '<?php echo $tarih;?>-Siparisler.pdf',
	  jsPDF:        { unit: 'in', format: 'A4', orientation: 'portrait' }
	};

	html2pdf().set(opt).from(element).save();


</script>
</body>
</html>