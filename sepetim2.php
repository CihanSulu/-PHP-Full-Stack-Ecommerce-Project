<?php session_start();
ob_start();?>

<?php include("php/connect.php"); ?>
<?php include("php/header.php"); ?>
<?php include("logo.php"); ?>

<?php
if (count(@$_COOKIE["urun"]) == 0){
    if (count($_COOKIE["hediyeurun"]) == 1){
        foreach (@$_COOKIE["hediyeurun"] as $key=>$item) {
            setcookie('hediyeurun[' . $key . ']', true, time() - 10000);
        }
        header('Location:sepetim.php');
    }


}
?>

<title><?php echo $logo." | Sepetim ";?></title>
</head>

<body class="theme-color-1">

        <?php include("php/navbar.php"); ?>


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Sepetim</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Sepetim</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <?php
        $id = array();
        foreach ($_COOKIE["urun"] as $key=>$item) {
            array_push($id,$key);
        }
    $ids = join("','",$id);
    $sql = "SELECT * FROM icerik WHERE id IN ('$ids')";
    $query = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 table-responsive-xs">
                    <?php if($cart->getTotalItem() == 0){ ?>
                        <h3>Sepetiniz Boş...</h3>
                    <?php } else{ ?>
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">Ürün</th>
                                <th scope="col">Ürün Adı</th>
                                <th scope="col">Adet</th>
                                <th scope="col">Fiyat</th>
                                <th scope="col">Sil</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $total = ""; ?>
                            <?php foreach($query as $item): ?>
                            <?php $total .= ','.$item["fiyat"]; ?>
                            <tr>
                                <td>
                                    <a href="#"><img src="https://siparislerimiz.site/dizinler/parfum/img/<?=$item['resim']?>" alt=""></a>
                                </td>
                                <td><a href="#"><?=$item["baslik"]?></a>
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="number" name="quantity"
                                                        class="form-control input-number" value="<?=$item['quantity'];?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color"><?=$item["fiyat"]?> ₺</h2>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number"
                                                value="<?=$item['quantity'];?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2 class="td-color"><?=$item["fiyat"]?> ₺</h2>
                                </td>
                                <td>
                                    <a href="sepet.php?remove=<?php echo $item["id"]; ?>&removehediyeurun=<?php echo key($_COOKIE['hediyeurun']); ?>" class="icon"><i class="ti-close"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php
                                $toplam = null;
                                $bol = explode(',',$total);
                                $bol = array_filter(array_values($bol));
                                foreach ($bol as $item) {
                                    $toplam += $item;
                                }

                            ?>
                        </tbody>

                    </table>
                    <?php if (count($_COOKIE["hediyeurun"])){ ?>

                                <h4>Hediye Ürünler</h4>
                                <?php

                                $idd = array();
                                foreach ($_COOKIE["hediyeurun"] as $key=>$item) {
                                    array_push($idd,$key);
                                }
                                $idss = join("','",$idd);
                                $sql = "SELECT * FROM icerik WHERE id IN ('$idss')";
                                $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

                                ?>
                                <table>

                                    <tr>

                                    </tr>
                                <?php foreach($result as $q1): ?>
                                    <tr>
                                        <td><img src="https://verims.xyz/dizinler/parfum/img/<?=$q1['resim']?>" style="width: 100px; height: 100px;" alt=""></td>
                                        <td><?=$q1["baslik"]?></td>
                                        <td>00.00 ₺</td>
                                    </tr>
                                <?php endforeach; ?>
                                </table>

                            <?php } ?>
                    <div class="table-responsive-md">
                        <table class="table cart-table ">
                            <tfoot>
                                <tr>
                                    <td>Toplam Sepet Tutarı :</td>
                                    <td>
                                        <h2><?php echo isset($toplam) ? $toplam : '0' ?> ₺</h2>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="/" class="btn btn-solid">Alışverişe Devam Et</a></div>
                <?php 
                if($allItems){
                    echo '<div class="col-6"><a href="checkout.php" class="btn btn-solid">Alışverişi Tamamla</a></div>';
                }

                ?>
                
            </div>
        </div>
    </section>
    <!--section end-->


   <?php include("php/footer.php"); ?>