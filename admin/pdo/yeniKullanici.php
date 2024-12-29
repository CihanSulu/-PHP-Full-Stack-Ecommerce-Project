<?php 
include("../php/connect.php"); 
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../index");
}

$username = $_POST["username"];
$password = $_POST["password"];
$password2 = $_POST["password2"];


$query = $conn->prepare("SELECT u_name FROM users WHERE 
u_name=?");
$query->execute(array($username));
$row = $query->fetch(PDO::FETCH_BOTH);

	if($query->rowCount() > 0) {
		echo '<div class="bg-danger p-2"><strong>HATA!</strong> Bu Kullancı Adı Daha Önce Alınmış.</div>';
	} else {
		if($username == "" || $password == "" || $password2 == ""){
			echo '<div class="bg-danger p-2"><strong>HATA!</strong> Boş Kullanıcı Girişi, Lütfen Tekrar Deneyin</div>';
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
					$query = $conn->prepare("INSERT INTO users SET
					u_name = ?,
					p_word = ?");
					$insert = $query->execute(array(
					     $username, $password
					));
					if ( $insert ){
					    $last_id = $conn->lastInsertId();
					    echo '<div class="bg-success p-2"><strong>BAŞARILI!</strong> Kullanıcı Oluşturuldu</div>';
					}
					else{
						echo '<div class="bg-danger p-2"><strong>HATA!</strong> Kullanıcı Oluşturulamadı Lütfen Daha Sonra Tekrar Deneyin.</div>';
					}
				}
			}
		}
	}





?>