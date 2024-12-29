<?php 
include("../../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
}
$isim = $_POST["isim"];
$telefon = $_POST["telefon"];
$sehir = $_POST["sehir"];
$ilce = $_POST["ilce"];
$adres = $_POST["adres"];
$siparisTutari = $_POST["fiyat"];
$personelNot = $_POST["personelnot"];

$odemeYontemi = $_POST["odeme"];
$kargoYontemi = $_POST["kargo"];
$kayitYontemi = $_POST["kayit"];


$urun = @$_POST["urun"];
$hediye = @$_POST["hediye"];
$urunx = "";
$hediyex = "";


if($isim == "" || $telefon == "" || $sehir == "" || $ilce == "" || $adres == "" || $siparisTutari == "" || $personelNot == "" || $odemeYontemi == "" || $kargoYontemi == "" || $kayitYontemi == "" || $urun == "" || $hediye == ""){
		echo "<script>alert('Boş Giriş Yapılamaz');</script>";
		echo '<meta http-equiv="refresh" content="0;URL=manuel-siparis">';
}
else{

foreach ($urun as $key => $value) {
	$urunx .= "_".$value."_";
}
foreach ($hediye as $key => $value) {
	$hediyex .= "_".$value."_";
}


if($kayitYontemi == "onay"){
	date_default_timezone_set('Europe/Istanbul');
	$onayTarihi = date('d.m.Y H:i:s');

	$query = $conn->prepare("INSERT INTO parfum SET
	adSoyad = ?,
	telefon = ?,
	sehir = ?,
	ilce = ?,
	adres = ?,
	siparisTutar = ?,
	urun = ?,
	hediye = ?,
	personelNot = ?,
	referans = ?,
	odemeYontemi = ?,
	kargoYontemi = ?,
	kayitYontemi = ?,
	tarih = ?,
	onayTarihi = ?");
	$insert = $query->execute(array(
	     $isim, $telefon, $sehir, $ilce, $adres, $siparisTutari, $urunx, $hediyex, $personelNot, "Manuel", $odemeYontemi, $kargoYontemi, $kayitYontemi, $onayTarihi, $onayTarihi
	));
	if ( $insert ){
	    $last_id = $conn->lastInsertId();
	    echo "<script>alert('Yeni Sipariş Oluşturuldu Yönlendiriliyorsunuz...');</script>";
		echo '<meta http-equiv="refresh" content="0;URL=yeni-siparisler">';
	}
	else{
		echo "<script>alert('Sipariş Oluşturulma Sırasında Hata Oldu Lütfen Daha Sonra Tekrar Deneyin');</script>";
		echo '<meta http-equiv="refresh" content="0;URL=yeni-siparisler">';
	}
}
else{

date_default_timezone_set('Europe/Istanbul');
	$onayTarihi = date('d.m.Y H:i:s');

	$query = $conn->prepare("INSERT INTO parfum SET
	adSoyad = ?,
	telefon = ?,
	sehir = ?,
	ilce = ?,
	adres = ?,
	siparisTutar = ?,
	urun = ?,
	hediye = ?,
	personelNot = ?,
	referans = ?,
	odemeYontemi = ?,
	kargoYontemi = ?,
	kayitYontemi = ?,
	tarih = ?,
	onayTarihi = ?");
	$insert = $query->execute(array(
	     $isim, $telefon, $sehir, $ilce, $adres, $siparisTutari, $urunx, $hediyex, $personelNot, "Manuel", $odemeYontemi, $kargoYontemi, $kayitYontemi, $onayTarihi, "-"
	));
	if ( $insert ){
	    $last_id = $conn->lastInsertId();
	    echo "<script>alert('Yeni Sipariş Oluşturuldu Yönlendiriliyorsunuz...');</script>";
		echo '<meta http-equiv="refresh" content="0;URL=yeni-siparisler">';
	}
	else{
		echo "<script>alert('Sipariş Oluşturulma Sırasında Hata Oldu Lütfen Daha Sonra Tekrar Deneyin');</script>";
		echo '<meta http-equiv="refresh" content="0;URL=yeni-siparisler">';
	}

}

}
?>