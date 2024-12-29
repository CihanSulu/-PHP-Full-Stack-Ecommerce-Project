<?php
/*if(isset($_SERVER[‘HTTP_HTTPSSL’])){

$_SERVER[‘SERVER_PORT’]=443;

$_SERVER[‘HTTPS’]=’on’; }*/
// error_reporting(0);
try {
     $conn = new PDO("mysql:host=localhost;dbname=ezelrent_verims2;", "ezelrent_root", "83428834__12");
     $conn->query("SET NAMES utf8");
} catch ( PDOException $e ){
     print $e->getMessage();
}
include("class.Cart.php");
$cart = new Cart([
	  'cartMaxItem'      => 0,
	  'itemMaxQuantity'  => 99,
	  'useCookie'        => false,
	]);
?>

<?php 

if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}

?>
