<?php include("php/connect.php"); ?>
<?php include("php/header.php"); ?>
<?php include("logo.php"); ?>

<title><?php echo $logo." | Erkek Parfümleri";?></title>
</head>

<body class="theme-color-1">


    <!-- header start -->
    <?php include("php/navbar.php"); ?>
    <!-- header end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos" style="margin-top: -20px;">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 collection-filter">

                        <!-- side-bar single product slider start -->
                        <div class="theme-card">
                            <h5 class="title-border" style="padding-bottom: 14px;">Öne Çıkan Erkek Parfümleri</h5>
                            <div class="offer-slider slide-1">
                                <div>

                                    <?php 
                                    $query = $conn->query("SELECT * FROM icerik where onecikan='EVET' AND kategori like '%erkek%' and stok>0 order by RAND() DESC limit 3", PDO::FETCH_ASSOC);
                                    if ( $query->rowCount() ){
                                        foreach( $query as $row ){  ?> 
                                        <div class="media">
                                            <a href="<?php echo seo($row["baslik"]);?>"><img class="img-fluid blur-up lazyload"
                                                    src="https://siparislerimiz.site/dizinler/parfum/img/<?php echo $row["resim"]; ?>" alt=""></a>
                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="<?php echo seo($row["baslik"]);?>">
                                                    <h6><?php echo $row["baslik"]; ?></h6>
                                                </a>
                                                <h4><?php echo $row["fiyat"]; ?> ₺</h4>
                                            </div>
                                        </div>
                                    <?php }} ?>

                                </div>
                            </div>
                        </div>
                        <!-- side-bar single product slider end -->
                        <!-- side-bar banner start here -->
                        <div class="collection-sidebar-banner">
                            <a href="#"><img src="assets/images/sol1.png" class="img-fluid blur-up lazyload"
                                    alt=""></a>
                        </div>
                        <!-- side-bar banner end here -->
                    </div>
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#"></a>
                                        <div class="top-banner-content small-section pt-0 pb-0">
                                            <h4 class="text-warning">ERKEK PARFÜMLERİMİZ</h4>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="filter-main-btn"><span
                                                            class="filter-btn btn btn-theme"><i class="fa fa-filter"
                                                                aria-hidden="true"></i> Filter</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid product-load-more">
                                            <div class="row margin-res">


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
                                                $query = $conn->query("SELECT * FROM icerik where kategori like '%erkek%' and stok>0 order by id DESC", PDO::FETCH_ASSOC);
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
                                        <div class="load-more-sec"><a href="javascript:void(0)" class="loadMore">Daha Fazla Görüntüle</a></div>
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