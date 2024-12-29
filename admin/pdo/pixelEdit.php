<?php 
include("../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../index");
}

$pixelf = $_POST["pixelf"];

$stmt=$conn->prepare("UPDATE pixel SET fpixel=:fpixel WHERE id=:id");
			    $result=$stmt->execute([
			        ":fpixel"      => $pixelf,
			        ":id"           => 1
			    ]);
			if($stmt){
				echo '<div class="bg-success p-2"><strong>BAŞARILI!</strong> Pixel Kod Başarıyla Eklendi.</div>';
			}
			else{
				echo '<div class="bg-danger p-2"><strong>HATA!</strong> Pixel Kod Eklenirken Hata Yaşandı Lütfen Daha Sonra Tekrar Deneyin</div>';
			}


?>