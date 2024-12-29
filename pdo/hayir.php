<?php
session_start(); 
$id = intval($_GET['id']);
$durum = 0;

if(!isset($_SESSION['urunler'])){
	$_SESSION['urunler'] = array();
}

for($i=0;$i<count($_SESSION['urunler']);$i++){
	if($_SESSION['urunler'][$i]==$id){
		$durum = $durum+1;
	}
}

if($durum!=0){
	echo "var";
}
else{
	array_push($_SESSION['urunler'],$id."/2");
}

echo '<meta http-equiv="refresh" content="0;URL=../sepetim">';
?>