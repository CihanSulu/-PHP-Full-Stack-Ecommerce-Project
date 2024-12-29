<?php 
include("php/connect.php"); 

$query = $conn->query("SELECT * FROM icerik", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
         $resim = $row["resim"];
         /*$resim = str_replace(["png","gif","jpeg","jpg","jfif"],"jpg",$resim);
         
         $query = $conn->prepare("UPDATE icerik SET
            resim = :yeni_resim
            WHERE id = :eski_id");
            $update = $query->execute(array(
                 "yeni_resim" => $resim,
                 "eski_id" => $row["id"]
            ));
            if ( $update ){
                 print "güncelleme başarılı!<br>";
            }*/
            
            
         echo $resim."<br>";
         
         
     }
}




?>