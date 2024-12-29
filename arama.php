<?php include("php/connect.php"); ?>
<?php include("php/header.php"); ?>
<?php include("logo.php"); ?>

<?php 
    $arama = $_GET["arama"];
?>

<title><?php echo $logo." | Bayan Parfümleri";?></title>
</head>

<body class="theme-color-1">

        <?php include("php/navbar.php"); ?>


    <!-- section start -->
    <section class="section-b-space ratio_asos" style="margin-top: -20px;">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="collection-product-wrapper">
                                        <div class="product-wrapper-grid">
                                            <input type="hidden" id="sayfa" value=1>
                                            <div class="row margin-res" id="icerikyeri">

                                                <?php
                                                function kisalt($kelime, $str = 10)
                                                {
                                                    if (strlen($kelime) > $str)
                                                    {
                                                        if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8").'..';
                                                        else $kelime = substr($kelime, 0, $str).'..';
                                                    }
                                                    return $kelime;
                                                }
                                                $sayfada = 60;//sayfada gösterilecek içerik sayısı 
                                                $query = $conn->query("SELECT * FROM icerik where baslik like '%$arama%' and stok > 0 order by id DESC", PDO::FETCH_ASSOC);
                                                if ( $query->rowCount() ){
                                                     foreach( $query as $row ){ ?>

                                                        <div class="col-xl-3 col-6 col-grid-box">
                                                            <div class="product-box">
                                                                <div class="img-wrapper">
                                                                    <div class="etiket d-flex justify-content-between">
                                                                        <img src="assets/images/2al.png" height="65px" class="my-auto">
                                                                        <img src="assets/images/kargo.png" height="50px" class="my-auto">
                                                                    </div>

                                                                    <div class="front">
                                                                        <a href="<?php echo seo($row["baslik"]); ?>" style="background-size:contain !important;">
                                                                            <img src="https://siparislerimiz.site/dizinler/parfum/img/<?php echo $row["resim"];?>"class="img-fluid " alt="" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="cart-info cart-wrap">
                                                                        <a href="<?php echo seo($row["baslik"]); ?>" title="Sepete Ekle"><i class="ti-shopping-cart"></i></a>
                                                                        <a href="<?php echo seo($row["baslik"]); ?>" title="Favorilere Ekle"><i class="ti-heart" aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-detail">
                                                                    <?php $rand = rand(4,5);?>
                                                                    <div class="rating">
                                                                        <?php for($i=1;$i<=$rand;$i++){?>
                                                                            <i class="fa fa-star"></i> 
                                                                        <?php } ?>
                                                                        <?php if($rand == 4){?>
                                                                            <i class="fa fa-star dark"></i> 
                                                                        <?php } ?>
                                                                    </div>
                                                                    <a href="<?php echo seo($row["baslik"]); ?>"><h6><?php echo kisalt($row["baslik"], 47);?></h6></a>
                                                                    <h4 style="text-align: right;padding-right: 30px;"><sup><del><?php echo $row["eskifiyat"]; ?> ₺</del></sup><span class="text-success"><?php echo $row["fiyat"]; ?> ₺</span></h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <?php  }} ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->


    <?php include("php/footer.php"); ?>