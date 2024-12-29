<?php
include("../../../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../../index");
}

$id = $_POST["hiddenid"];
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
$kaynak = $_FILES["fileUp"]["tmp_name"]; // tempdeki adı

include("../../../seo.php");
$seo = seo($baslik);

if(($baslik == "" || $fiyat == "" || $eskifiyat == "" || $stok == "") || ($kategorierkek=="" && $kategoribayan=="" && $kategoriunisex=="")){
	echo '<div class="bg-danger p-3"><strong>HATA !</strong> Lütfen Tüm Alanları Doldurduğunuzdan Emin Olun.</div>';
}
else{
	if($kaynak == ""){
		if($aciklama==""){
			$stmt=$conn->prepare("UPDATE icerik SET baslik=:baslik, seo=:seo, fiyat=:fiyat, eskifiyat=:eskifiyat, stok=:stok, kategori=:kategori, onecikan=:onecikan, onecikan2=:onecikan2 WHERE id=:id");
			    $result=$stmt->execute([
			        ":baslik"         => $baslik,
			        ":seo"         => $seo,
			        ":fiyat"      => $fiyat,
			        ":eskifiyat"      => $eskifiyat,
			        ":stok"         => $stok,
			        ":kategori"      => $kategori,
			        ":onecikan"         => $onecikan,
			        ":onecikan2"         => $onecikan2,
			        ":id"           => $id
			    ]);	
		}
		else{
			$stmt=$conn->prepare("UPDATE icerik SET baslik=:baslik, seo=:seo, fiyat=:fiyat, eskifiyat=:eskifiyat, stok=:stok, kategori=:kategori, onecikan=:onecikan, onecikan2=:onecikan2, aciklama=:aciklama WHERE id=:id");
			    $result=$stmt->execute([
			        ":baslik"         => $baslik,
			        ":seo"         => $seo,
			        ":fiyat"      => $fiyat,
			        ":eskifiyat"      => $eskifiyat,
			        ":stok"         => $stok,
			        ":kategori"      => $kategori,
			        ":onecikan"         => $onecikan,
			        ":onecikan2"         => $onecikan2,
			        ":aciklama"      => $aciklama,
			        ":id"           => $id
			    ]);	
		}
		if($stmt){
			    	echo '<div class="bg-success p-3"><strong>BAŞARILI !</strong> Güncelleme İşlemi Başarıyla Tamamlandı.</div>';
			    }
			    else
			    	echo '<div class="bg-danger p-3"><strong>HATA !</strong> Güncelleme Başarısız Lütfen Daha Sonra Tekrar Deneyin.</div>';
	}
	else{
		/*Resim Upload Start */
		
		$ad =  $_FILES["fileUp"]["name"]; // dosya adı
		$tip = $_FILES["fileUp"]["type"]; // dosya tipi
		$boyut = $_FILES["fileUp"]["size"]; // boyutu
		$hedef = "../img"; // başta açtıgımız klasör adımız..


		function ext($file)
		{
		    $ext = pathinfo($file);
		    return @$ext['extension'];
		} 

		$uzanti = ext($ad);
		$ad = $id.".".$uzanti;
		$query = $conn->query("SELECT * FROM icerik WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
		if ( $query ){
		    $resim = $query["resim"];
		}
    	$sil = unlink("../img/$resim");
    	if($sil){
    		$kaydet = move_uploaded_file($kaynak,$hedef."/".$ad);
    		if($kaydet){
    			if($aciklama==""){
    				$stmt=$conn->prepare("UPDATE icerik SET baslik=:baslik, fiyat=:fiyat, eskifiyat=:eskifiyat, stok=:stok, kategori=:kategori, onecikan=:onecikan, onecikan2=:onecikan2, resim=:resim WHERE id=:id");
				    $result=$stmt->execute([
				        ":baslik"         => $baslik,
				        ":fiyat"      => $fiyat,
				        ":eskifiyat"      => $eskifiyat,
				        ":stok"         => $stok,
				        ":kategori"      => $kategori,
				        ":onecikan"         => $onecikan,
				        ":onecikan2"         => $onecikan2,
				        ":resim"         => $ad,
				        ":id"           => $id
				    ]);
    			}
    			else{
    				$stmt=$conn->prepare("UPDATE icerik SET baslik=:baslik, fiyat=:fiyat, eskifiyat=:eskifiyat, stok=:stok, kategori=:kategori, onecikan=:onecikan, onecikan2=:onecikan2, resim=:resim, aciklama=:aciklama WHERE id=:id");
				    $result=$stmt->execute([
				        ":baslik"         => $baslik,
				        ":fiyat"      => $fiyat,
				        ":eskifiyat"      => $eskifiyat,
				        ":stok"         => $stok,
				        ":kategori"      => $kategori,
				        ":onecikan"         => $onecikan,
				        ":onecikan2"         => $onecikan2,
				        ":resim"         => $ad,
				        ":aciklama"      => $aciklama,
				        ":id"           => $id
				    ]);
    			}

			    if($stmt){
			    	echo '<div class="bg-success p-3"><strong>BAŞARILI !</strong> Güncelleme İşlemi Başarıyla Tamamlandı.</div>';
			    }
			    else
			    	echo '<div class="bg-danger p-3"><strong>HATA !</strong> Güncelleme Başarısız Lütfen Daha Sonra Tekrar Deneyin.</div>';
    		}
    		else
    			echo '<div class="bg-danger p-3"><strong>HATA !</strong> Güncelleme Başarısız Lütfen Daha Sonra Tekrar Deneyin.</div>';
    	}
    	else
    		echo '<div class="bg-danger p-3"><strong>HATA !</strong> Güncelleme Başarısız Lütfen Daha Sonra Tekrar Deneyin.</div>';
	}
}
?>