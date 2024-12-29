<?php 
include("../../php/connect.php");

header('Content-type: application/xml; ',true);  ?>
<icerikler xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php 
$result = $conn->query("SELECT * FROM icerik")->fetchAll(PDO::FETCH_ASSOC); // Konunun linkini çekiyoruz
?>


<?php foreach($result as $row){ ?>
    <urun>
        <id><?php echo $row["id"] ?></id>
        <baslik><?php echo $row["baslik"] ?></baslik>
        <seo><?php echo $row["seo"] ?></seo>
        <fiyat><?php echo $row["fiyat"] ?></fiyat>
        <eskifiyat><?php echo $row["eskifiyat"] ?></eskifiyat>
        <stok><?php echo $row["stok"] ?></stok>
        <kategori><?php echo $row["kategori"] ?></kategori>
        <onecikan><?php echo $row["onecikan"] ?></onecikan>
        <resim><?php echo $row["resim"] ?></resim>
        <aciklama><?php echo $row["aciklama"] ?></aciklama>
    </urun>
<?php } ?>

</icerikler>
