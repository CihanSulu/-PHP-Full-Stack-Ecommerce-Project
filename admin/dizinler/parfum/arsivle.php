<?php 
include("../../php/connect.php");
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
}

$yontem = "arsiv";
$id = "onay";

$stmt=$conn->prepare("UPDATE parfum SET kayitYontemi=:kayitYontemi WHERE kayitYontemi=:id");
    $result=$stmt->execute([
        ":kayitYontemi"         => $yontem,
        ":id"           => $id
    ]);

if($stmt){
	echo '<meta http-equiv="refresh" content="0;URL=onayli-siparisler">';
}
else{
	echo "<script>alert('Arşivleme İşlemi Sırasında Hata Oldu Lütfen Daha Sonra Tekrar Deneyin');</script>";
	echo '<meta http-equiv="refresh" content="0;URL=onayli-siparisler">';
}



?>