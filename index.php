<?php include("php/connect.php"); ?>
<?php include("php/header.php"); ?>
<?php include("logo.php"); ?>

<title><?php echo $logo." | Anasayfa";?></title>
</head>

<body class="theme-color-5">

    <!-- header start -->
    <?php include("php/navbar.php");?>
    <!-- header end -->


    <!-- Home slider -->
    <section class="p-0 bg-white">
        <div class="slide-1 home-slider">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/images/sliderim2.jpg" alt="First slide">
                  <div class="slider-contain d-none">
                        <div>
                            <h4>welcome to fashion</h4>
                            <h1>men fashion</h1>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/sliderim1.jpg" alt="Second slide">
                  <div class="slider-contain d-none">
                        <div>
                            <h4>welcome to fashion</h4>
                            <h1>men fashion</h1>
                        </div>
                    </div>
                </div>
                
              </div>

              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- collection banner -->
    <section class="banner-furniture ratio_45 banner-padding">
        <div class="container-fluid">
            <div class="row partition3">
                <div class="col-md-4">
                    <a href="bayan-parfumleri.php">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="assets/images/4.png" alt=""
            class="img-fluid blur-up lazyload bg-img">
                            </div>
                            <div class="contain-banner banner-3">
                                <div class="d-none">
            <h4 class="text-white">%70'e Varan İndirimler</h4>
            <h2 class="text-white">Tüm Parfümlerde Dev Kampanya Başladı</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="erkek-parfumleri.php">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="assets/images/5.png" alt=""
            class="img-fluid blur-up lazyload bg-img">
                            </div>
                            <div class="contain-banner banner-3">
                                <div class="d-none">
            <h4 class="text-white">2 AL 1 ÖDE</h4>
            <h2 class="text-white">Dünyaca Ünlü Tüm Marka Ve Ürünlerde</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="unisex-parfumleri.php">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="assets/images/6.png" alt=""
            class="img-fluid blur-up lazyload bg-img">
                            </div>
                            <div class="contain-banner banner-3">
                                <div class="d-none">
            <h4 class="text-white">%70'e Varan İndirimler</h4>
            <h2 class="text-white">Tüm Parfümlerde Dev Kampanya Başladı</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->

    <div class="title1 section-t-space">
        <h2 class="title-inner1">ÖNE ÇIKAN ÜRÜNLERİMİZ</h2>
    </div>
    <section class="section-b-space pt-0" style="margin-bottom: -75px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">

                        <?php 
                        $query = $conn->query("SELECT * FROM icerik where onecikan='EVET' and stok>0 order by id DESC", PDO::FETCH_ASSOC);
                        if ( $query->rowCount() ){
                        foreach( $query as $row ){  ?> 
                        <div class="product-box ">
                            <div class="img-wrapper">
                                <div class="etiket d-flex justify-content-between">
                                    <img src="assets/images/2al.png" height="65px" style="width: 65px !important;" class="my-auto">
                                    <img src="assets/images/kargo.png" height="50px" style="width: 65px !important;" class="my-auto">
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
                                <?php $rand = rand(5,5);?>
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
                            <?php  } }?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="title1 section-t-space">
        <h2 class="title-inner1">SİZİN İÇİN SEÇTİKLERİMİZ</h2>
    </div>
    <section class="section-b-space pt-0" style="margin-bottom: -40px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">

                        <?php 
                        $query = $conn->query("SELECT * FROM icerik where onecikan2='EVET' and stok>0 order by id DESC", PDO::FETCH_ASSOC);
                        if ( $query->rowCount() ){
                        foreach( $query as $row ){  ?> 
                        <div class="product-box ">
                            <div class="img-wrapper">
                                <div class="etiket d-flex justify-content-between">
                                    <img src="assets/images/2al.png" height="65px" style="width: 65px !important;" class="my-auto">
                                    <img src="assets/images/kargo.png" height="50px" style="width: 65px !important;" class="my-auto">
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
                                <?php $rand = rand(5,5);?>
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
                            <?php  } }?>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Tab product -->
    <div class="title1 section-t-space">
        <h4>Türkiye'nin Lider Parfüm Sitesinden</h4>
        <h2 class="title-inner1">TÜM ÜRÜNLERİMİZ</h2>
    </div>
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title d-none">
                            <li class="current"><a href="tab-5">Tüm Ürünlerimiz</a></li>
                        </ul>
                        <div class="tab-content-cls">

                            <div id="tab-5" class="tab-content active default">
                                <input type="hidden" id="sayfa" value=1>
                                <div class="no-slider row" id="icerikyeri">


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
                                $query = $conn->query("SELECT * FROM icerik where stok>0 order by id DESC LIMIT 0,$sayfada", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                     foreach( $query as $row ){ ?>


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

                                <?php  } } ?>       



                                </div>
                                <div class="text-center mt-5">
                                    <button class="site-btn sb-line sb-dark btncustom" id="btndevam"><i class="fa-solid fa-plus"></i> &nbsp DAHA FAZLA GÖRÜNTÜLE</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tab product end -->


    <!-- Parallax banner -->
    <section class="p-0">
        <div class="full-banner parallax text-center p-left">
            <img src="assets/images/70.jpg" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain d-none">
                            <h4 class="text-white">Dünyaca Ünlü Markalarda</h4>
                            <h3 class="text-white">%70'e Varan Dev İndirim</h3>
                            <h4 class="text-white">- <?php echo $logo; ?> -</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- blog section -->
    <section class="blog blog-2 section-b-space ratio3_2 slick-default-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title1">
                        <h2 class="title-inner1">Sizin İçin En Güzel Kokular</h2>
                    </div>
                    <div class="slide-3 no-arrow">
                        <div class="col-md-12">
                            <a href="bayan-parfumleri.php">
                                <div class="classic-effect">
                                    <div>
                                        <img alt="" src="assets/images/alt1.gif"
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>Kadın Parfümlerimiz</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="erkek-parfumleri.php">
                                <div class="classic-effect">
                                    <div><img alt="" src="assets/images/alt2.gif"
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>Erkek Parfümlerimiz</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="unisex-parfumleri.php">
                                <div class="classic-effect">
                                    <div>
                                        <img alt="" src="assets/images/alt3.gif"
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>Unisex Parfümlerimiz</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end-->

<?php include("php/footer.php"); ?>