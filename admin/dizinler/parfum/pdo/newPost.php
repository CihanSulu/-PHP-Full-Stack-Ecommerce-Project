<?php
include("../../../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../../index");
}

$baslik = $_POST["baslik"];
$fiyat = $_POST["fiyat"];
$eskifiyat = $_POST["uruneskifiyat"];
$stok = $_POST["stok"];
$kategorierkek = @$_POST["kategorierkek"];
$kategoribayan = @$_POST["kategoribayan"];
$kategoriunisex = @$_POST["kategoriunisex"];
$aciklama = $_POST["aciklama"];
$kategori = $kategorierkek."+".$kategoribayan."+".$kategoriunisex;
$onecikan = $_POST["onecikarilan"];
$onecikan2 = $_POST["onecikarilan2"];

/*Resim Upload Start */
$kaynak = $_FILES["fileUp"]["tmp_name"]; // tempdeki adı
$ad =  $_FILES["fileUp"]["name"]; // dosya adı
$tip = $_FILES["fileUp"]["type"]; // dosya tipi
$boyut = $_FILES["fileUp"]["size"]; // boyutu
$hedef = "../img"; // başta açtıgımız klasör adımız..
$query = $conn->query("SELECT * FROM icerik", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          $say = $row['id'];
     }
}
@$say = $say+1;


function ext($file)
{
    $ext = pathinfo($file);
    return @$ext['extension'];
} 

$uzanti = ext($ad);
$ad = $say.".".$uzanti;

include("../../../seo.php");
$baslikseo = seo($baslik);

if(($baslik == "" || $fiyat == "" || $eskifiyat == "" || $stok == "" || $aciklama=="" || $kaynak=="") || ($kategorierkek=="" && $kategoribayan=="" && $kategoriunisex=="")){
	echo '<div class="bg-danger p-3"><strong>HATA !</strong> Lütfen Tüm Alanları Doldurduğunuzdan Emin Olun.</div>';
}
else{
	$kaydet = move_uploaded_file($kaynak,$hedef."/".$ad);
	if($kaydet){

		$query = $conn->prepare("INSERT INTO icerik SET
		baslik = ?,
		seo = ?,
		fiyat = ?,
		eskifiyat = ?,
		stok = ?,
		kategori = ?,
		onecikan = ?,
		onecikan2 = ?,
		resim = ?,
		aciklama = ?");
		$insert = $query->execute(array(
		     $baslik, $baslikseo, $fiyat, $eskifiyat, $stok, $kategori, $onecikan, $onecikan2, $ad, $aciklama
		));
		if ( $insert ){
		    $last_id = $conn->lastInsertId();
		    echo '<div class="bg-success p-3"><strong>BAŞARILI !</strong> Ürün Başarıyla Eklendi.</div>';
		}


		//echo '<div class="bg-success p-3"><strong>BAŞARILI !</strong> Ürün Başarıyla Eklendi.</div>';
	}
	else
		echo '<div class="bg-danger p-3"><strong>HATA !</strong> Resim Yüklenirken Sorun Yaşandı.</div>';

}







?>