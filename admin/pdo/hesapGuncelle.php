<?php 
include("../php/connect.php");
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../index");
} 
$password = $_POST["password"];
$password2 = $_POST["password2"];


if($password == "" || $password2 == ""){
	echo '<div class="bg-danger p-2"><strong>HATA!</strong> Boş Şifre Girişi, Lütfen Tekrar Deneyin</div>';
}
else{
	if($password != $password2){
		echo '<div class="bg-danger p-2"><strong>HATA!</strong> Uyuşmayan Şifreler, Lütfen Tekrar Deneyin</div>';
	}
	else{
		if(strlen($password)<=6){
			echo '<div class="bg-danger p-2"><strong>HATA!</strong> Güvensiz Şifre, Lütfen Tekrar Deneyin</div>';
		}
		else{
			$password = md5(sha1(sha1(sha1(md5(md5($password))))));
			$stmt=$conn->prepare("UPDATE users SET p_word=:p_word WHERE u_name=:u_name");
			    $result=$stmt->execute([
			        ":p_word"      => $password,
			        ":u_name"           => $_SESSION['username']
			    ]);
			if($stmt){
				echo '<div class="bg-success p-2"><strong>BAŞARILI!</strong> Şifreniz Başarıyla Değiştirildi.</div>';
			}
			else{
				echo '<div class="bg-danger p-2"><strong>HATA!</strong> Sistem Hatası</div>';
			}	
		}
	}
}




?>