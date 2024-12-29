<?php 
include("../../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
}

$id = $_POST["gizliid"];
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


$urun = $_POST["urun"];
$hediye = $_POST["hediye"];
$urunx = "";
$hediyex = "";

foreach ($urun as $key => $value) {
	$urunx .= "_".$value."_";
}
foreach ($hediye as $key => $value) {
	$hediyex .= "_".$value."_";
}

if($kayitYontemi == "onay"){
	date_default_timezone_set('Europe/Istanbul');
	$onayTarihi = date('d.m.Y H:i:s');
	$stmt=$conn->prepare("UPDATE parfum SET adSoyad=:adSoyad, telefon=:telefon, sehir=:sehir, ilce=:ilce, adres=:adres, siparisTutar=:siparisTutar, urun=:urun, hediye=:hediye, personelnot=:personelNot, odemeYontemi=:odemeYontemi, kargoYontemi=:kargoYontemi, kayitYontemi=:kayitYontemi, onayTarihi=:onayTarihi WHERE id=:id");
				    $result=$stmt->execute([
				        ":adSoyad"         => $isim,
				        ":telefon"      => $telefon,
				        ":sehir"         => $sehir,
				        ":ilce"      => $ilce,
				        ":adres"         => $adres,
				        ":siparisTutar"         => $siparisTutari,
				        ":urun"      => $urunx,
				        ":hediye"      => $hediyex,
				        ":personelNot"      => $personelNot,
				        ":odemeYontemi"      => $odemeYontemi,
				        ":kargoYontemi"      => $kargoYontemi,
				        ":kayitYontemi"      => $kayitYontemi,
				        ":onayTarihi"      => $onayTarihi,
				        ":id"           => $id
				    ]);
}
else{

$stmt=$conn->prepare("UPDATE parfum SET adSoyad=:adSoyad, telefon=:telefon, sehir=:sehir, ilce=:ilce, adres=:adres, siparisTutar=:siparisTutar, urun=:urun, hediye=:hediye, personelnot=:personelNot, odemeYontemi=:odemeYontemi, kargoYontemi=:kargoYontemi, kayitYontemi=:kayitYontemi WHERE id=:id");
				    $result=$stmt->execute([
				        ":adSoyad"         => $isim,
				        ":telefon"      => $telefon,
				        ":sehir"         => $sehir,
				        ":ilce"      => $ilce,
				        ":adres"         => $adres,
				        ":siparisTutar"         => $siparisTutari,
				        ":urun"      => $urunx,
				        ":hediye"      => $hediyex,
				        ":personelNot"      => $personelNot,
				        ":odemeYontemi"      => $odemeYontemi,
				        ":kargoYontemi"      => $kargoYontemi,
				        ":kayitYontemi"      => $kayitYontemi,
				        ":id"           => $id
				    ]);

}
if($stmt){
	echo "<script>alert('Güncelleme İşlemi Başarılı Yönlendiriliyorsunuz...');</script>";
	echo '<meta http-equiv="refresh" content="0;URL=yeni-siparisler">';
}
else{
	echo "<script>alert('Güncelleme İşlemi Sırasında Hata Oldu Lütfen Daha Sonra Tekrar Deneyin');</script>";
	echo '<meta http-equiv="refresh" content="0;URL=yeni-siparisler">';
}


?>