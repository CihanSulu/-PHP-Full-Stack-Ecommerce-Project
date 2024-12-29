<?php session_start();
ob_start();?>

<?php include("php/connect.php"); ?>
<?php include("php/header.php"); ?>
<?php include("logo.php"); ?>

<?php
$allItems = $cart->getItems();
    if($_GET["urunSil"]){
        $sil = $cart->remove($_GET["urunSil"],$_GET["sira"]);
        if($sil){
            header("Location: https://parfumsihri.com/sepetim.php");
        }
    }
?>

<title><?php echo $logo." | Sepetim ";?></title>
</head>

<body class="theme-color-1">

        <?php include("php/navbar.php"); ?>


    <!--section start-->
    <section class="cart-section cart-section2 section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <?php if($cart->getTotalItem() == 0){ ?>
                        <h3>Sepetiniz Boş...</h3>
                    <?php } else{ ?>
                    <table class="table cart-table2 table-responsive-md">
                        <thead class="text-center">
                            <tr class="table-head">
                                <th scope="col">Ürün</th>
                                <th scope="col">Adet</th>
                                <th scope="col">Fiyat</th>
                                <th scope="col">Sil</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach ($allItems as $items) {
                                    $sayac = 0;
                                    foreach ($items as $item) {
                                        $fiyat = 0;
                                        if($item['attributes']['fiyat'] != 0){
                                            $fiyat = $item['attributes']['fiyat'];
                                        }
                                ?>
                            <tr>
                                <td>
                                    <a href="#"><img src="https://siparislerimiz.site/dizinler/parfum/img/<?=$item['attributes']['image'];?>" alt=""> <?=$item['attributes']['baslik']?></a></a>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <p><?=$item['quantity'];?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h3 class="td-color"><?=$fiyat;?> ₺</h3>
                                </td>
                                <td>
                                    <?php if($fiyat != 0){
                                    ?>
                                    <a href="sepetim.php?sira=<?=$sayac?>&urunSil=<?=substr_replace($item['attributes']['id'],'',-3);?>" class="icon"><i class="ti-close"></i></a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php
                                    }
                                    $sayac++;
                                }
                            ?>
                        </tbody>

                    </table>
                    <?php } ?>
                    <div class="table-responsive-md d-none" >
                        <table class="table cart-table ">
                            <tfoot>
                                <tr>
                                    <td>Toplam Sepet Tutarı :</td>
                                    <td>
                                        <h2><?=$cart->getAttributeTotal('fiyat')?> ₺</h2>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-4">
                    <div class="card">
                        <table class="table cart-table ">
                        <tr>
                            <td>Toplam Sepet Tutarı :</td>
                            <td>
                                <h2><?=$cart->getAttributeTotal('fiyat')?> ₺</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>Toplam Kargo Tutarı :</td>
                            <td>
                                <h2>0.00 ₺</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>Toplam :</td>
                            <td>
                                <h2><?=$cart->getAttributeTotal('fiyat')?> ₺</h2>
                            </td>
                        </tr>
                    </table>
                    <?php 
                    if($allItems){
                        echo '<a href="checkout.php" class="btn btn-success p-3 text-ligt btn-block mb-2 mt-4"><i class="fa-solid fa-arrow-right"></i> &nbsp Alışverişi Tamamla</a>';
                    }
                    ?>
                    <a href="/" class="btn btn-dark text-ligt p-3 btn-block"><i class="fa-solid fa-arrow-left"></i> &nbsp Alışverişe Devam Et</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--section end-->


   <?php include("php/footer.php"); ?>