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
$kargoYontemi = "ptt";
$kayitYontemi = @$_GET["kayitYontemi"];
$onayTarihi = "-";
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d.m.Y H:i:s');

echo $adsoyad."<br>";
echo $telefon."<br>";
echo $sehir."<br>";
echo $ilce."<br>";
echo $adres."<br>";
echo $siparisTutar."<br>";
echo $urun."<br>";
echo $hediye."<br>";
echo $personelNot."<br>";
echo $referans."<br>";
echo $odemeYontemi."<br>";
echo $kargoYontemi."<br>";
echo $kayitYontemi."<br>";



?>