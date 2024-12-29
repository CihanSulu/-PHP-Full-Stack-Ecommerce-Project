<?php
include("../../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
}

$id = $_GET["id"];
$query = $conn->query("SELECT * FROM icerik WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
    $resim = $query["resim"];
}

$sil = unlink("img/$resim");
if($sil){
	$query = $conn->prepare("DELETE FROM icerik WHERE id = :id");
	$delete = $query->execute(array(
	   'id' => $id
	));
	echo "<script>alert('Silme İşlemi Başarıyla Tamamlandı Yönlendiriliyorsunuz...');</script>";
	echo '<meta http-equiv="refresh" content="0;URL=icerikler">';
}


?>