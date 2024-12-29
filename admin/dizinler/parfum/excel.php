<?php 
include("../../php/connect.php");
session_start();
if (!isset( $_SESSION['loginpage'] ) ) {
    header("Location: ../../index");
}

function exportExcel($filename='ExportExcel',$columns=array(),$data=array(),$replaceDotCol=array()){
    header('Content-Encoding: UTF-8');
    header('Content-Type: text/plain; charset=utf-8'); 
    header("Content-disposition: attachment; filename=".$filename.".xls");
    echo "\xEF\xBB\xBF"; // UTF-8 BOM
      
    $say=count($columns);
      
    echo '<table border="1"><tr>';
    foreach($columns as $v){
        echo '<th style="background-color:#FFA500">'.trim($v).'</th>';
    }
    echo '</tr>';
  
    foreach($data as $val){
        echo '<tr>';
        for($i=0; $i < $say; $i++){
  
            if(in_array($i,$replaceDotCol)){
                echo '<td>'.str_replace('.',',',$val[$i]).'</td>';
            }else{
                echo '<td>'.$val[$i].'</td>';
            }
        }
        echo '</tr>';
    }
}

/* TANIMLAMALAR */
 
$columns=array();
 
$data=array();
 
/*
 $replaceDotCol
 Decimal kolonlardaki noktayı (.) virgüle (,) dönüştürüelecek kolon numarası belirtilmelidir.
 Örneğin; Kolon 4'ün verilerinde nokta değilde virgül görülmesini istiyorsanız
 ilgili kolonun array key numarasını belirtmelisiniz. İlk kolonun key numarası 0'dır.
*/
$replaceDotCol=array(3); 
 
 
/* Sütun Başlıkları */
$columns=array(
    'MÜŞTERİ ADI',
    'İLÇE',
    'İL',
    'ADRES',
    'TELEFON',
    'ÜRÜN',
    'HEDİYE',
    'TUTAR'
);
 
 


/* Satır Verileri */

$query = $conn->query("SELECT * FROM parfum WHERE kayitYontemi='onay'", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          $data[]=array(
		    $row["adSoyad"],
		    $row["ilce"],
		    $row["sehir"],
		    $row["adres"],
		    $row["telefon"],
		    $row["urun"],
		    $row["hediye"],
		    $row["siparisTutar"]
		);
     }
}


exportExcel('yeniSiparis',$columns,$data,$replaceDotCol);




?>