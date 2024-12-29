<?php 
session_start();
include("php/connect.php");
$user = $_POST["Username"];
$pass = $_POST["Password"];

if(empty($user) || empty($pass)) {
	echo "<div class='alert alert-danger'>Lütfen Tüm Alanları Doldurduğunuzdan Emin Olun.</div> ";
} else {
$pass = md5(sha1(sha1(sha1(md5(md5($pass))))));

$query = $conn->prepare("SELECT u_name, p_word FROM users WHERE 
u_name=? AND p_word=? ");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

	if($query->rowCount() > 0) {

		$_SESSION['loginpage'] = true;
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $pass;

		echo "<div class='alert alert-success'>Giriş Yapıldı, Yönlendiriliyorsunuz...</div>";
		echo "<meta http-equiv='refresh' content='1;url=home'>";
	} else {
	  echo "<div class='alert alert-danger'>Yanlış Kullanıcı Adı veya Şifre</div>";
	}
}



?>