    <?php include("php/connect.php"); ?>
<?php include("php/header.php"); ?>
<?php include("logo.php"); ?>
    <?php 
    //İçerik Çekimi
    $url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $sw = seo($_GET["baslik"]);
    $query = $conn->query("SELECT * FROM icerik WHERE seo = '{$sw}'")->fetch(PDO::FETCH_ASSOC);
    if ( $query ){
        $id = $query["id"];
        $baslik = $query["baslik"];
        $fiyat = $query["fiyat"];
        $eskifiyat = $query["eskifiyat"];
        $stok = $query["stok"];
        $resim = $query["resim"];
        $aciklama = $query["aciklama"];
        $kategori = str_replace('+','',$query["kategori"]);
        $kategori2 = $query["kategori"];
        $$kategoriTam = "";
        if($kategori2[0] == '+')
            $kategori2[0] = '';
        if($kategori2[1] == '+')
            $kategori2[1] = '';
            
        for($i=0;$i<strlen($kategori2);$i++){
            if($kategori2[$i] == '+')
                break;
            $kategoriTam .= $kategori2[$i];
        }
        $kategori2 = $kategoriTam;
        
    }

    if($id == "")
        header("Location: /");

    ?>
<?php include("logo.php"); ?>
<title><?php echo $logo." | ".$baslik;?></title>
</head>

<body class="theme-color-1">

    <!-- header start -->
    <?php include("php/navbar.php"); ?>
    <!-- header end -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick">
                            <div><img src="https://siparislerimiz.site/dizinler/parfum/img/<?php echo $resim;?>" alt=""
                             class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                             <div><img src="https://siparislerimiz.site/dizinler/parfum/img/<?php echo $resim;?>" alt=""
                                     class="img-fluid blur-up lazyload"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2><?php echo $baslik; ?></h2>
                            <div class="label-section">
                                <span class="badge bg-success">Ücretsiz Kargo</span>
                                <span class="badge bg-success">Kapıda Ödeme</span>
                            </div>
                            <h3 class="price-detail"><?php echo $fiyat; ?> ₺ <del><?php echo $eskifiyat?> ₺</del><span>%<?php echo round($fiyat*100/$eskifiyat); ?> İndirim</span></h3>
                            
                            <?php if($stok > 0){ ?>
                            <div class="product-buttons shadow p-3 my-5">
                                <h2 class="text-danger">Hediyenizi Seçin</h2>
                                <p class="mb-3">2'inci parfümü değiştirmek istiyorsanız EVET'i seçin.</p>
                                <button id="cartEffect" class="btn btn-solid hover-solid btn-animation w-auto p-2 px-5 mb-3 abc" onclick="evet();"><i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> EVET</button>

                                <button id="cartEffect" class="btn btn-solid hover-solid btn-animation w-auto p-2 mx-sm-3 px-5 mb-3 abc" onclick="hayir();"><i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> HAYIR</button>
                            </div>
                            <?php }else{ ?>
                            <div class="product-buttons shadow p-3 my-5">
                                <h6>Ürün Stokta Bulunmamaktadır.</h6>
                                <a href="javascript:history.back()" class="btn btn-primary btn-solid-hover-solid btn-animation">Geri Dön</a>
                            </div>
                            <?php } ?>

                            <div class="border-product">
                                <h6 class="product-title">Ürünü Sosyal Medya Hesaplarında Paylaş</h6>
                                <div class="product-icon">
                             <ul class="product-social">
                                 <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                 <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&media=YAYINLANACAK_RESIM_URL&description=<?php echo $logo; ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                 <li><a href="https://twitter.com/share?url=<?php echo $url; ?>&text=<?php echo $logo; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="http://reddit.com/submit?url=<?php echo $url; ?>&title=<?php echo $logo; ?>" target="_blank"><i class="fa fa-rss"></i></a></li>
                             </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                href="#top-home" role="tab" aria-selected="true"><i
                             class="icofont icofont-ui-home"></i>Ürün Açıklaması</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                href="#top-profile" role="tab" aria-selected="false"><i
                             class="icofont icofont-man-in-glasses"></i>İade & Teslimat</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="video-top-tab" data-bs-toggle="tab"
                                href="#video-profile" role="tab" aria-selected="false"><i
                             class="icofont icofont-man-in-glasses"></i>Ürün Videosu</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">

                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <div class="product-tab-discription">
                                <div class="part">
                             <?php echo $aciklama; ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                             <p>ALICI, sözleşme konusu ürünün kendisine veya gösterdiği adresteki kişi/kuruluşa tesliminden itibaren 7 gün içinde cayma hakkına sahiptir. Cayma hakkının kullanılması için bu süre içinde www.trendparfumler.com ’a email veya telefon ile bildirimde bulunulması ve ürünün ilgili madde hükümleri çerçevesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde, 3. kişiye veya ALICI'ya teslim edilen ürünün www.trendparfumler.com ’a gönderildiğine ilişkin kargo teslim tutanağı örneği ile fatura aslının iadesi zorunludur. Bu belgelerin ulaşmasını takip eden 7 gün içinde ürün bedeli ALICI' ya iade edilir. <br><br>
                             Niteliği itibari ile iade edilemeyecek ürünler, tek kullanımlık ürünler, kopyalanabilir yazılım ve programlar, hızlı bozulan veya son kullanım tarihi geçen ürünler için cayma hakkı kullanılamaz. Cayma hakkının kullanılması, ürünün ambalajının açılmamış, bozulmamış ve ürünün kullanılmamış olması şartına bağlıdır.<br>
                             Ayrıca, tüketicinin özel istek ve talepleri uyarınca üretilen veya üzerinde değişiklik ya da ilaveler yapılarak kişiye özel hale getirilen mallarda tüketici cayma hakkını kullanamaz.</p>
                        </div>

                        <div class="tab-pane fade" id="video-profile" role="tabpanel" aria-labelledby="video-top-tab">
                             <div class="">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/-oeZ0nFsExs"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->


    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>Benzer Ürünler</h2>
                </div>
            </div>
            <div class="row search-product">

                <?php 
                function kisalt($kelime, $str = 10){
                    if (strlen($kelime) > $str){
                        if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8").'..';
                        else $kelime = substr($kelime, 0, $str).'..';
                    }
                    return $kelime;
                }
                $query = $conn->query("SELECT * FROM icerik where kategori like '%".$kategori2."%' and not id = '$id' and stok>0 order by RAND() DESC limit 6", PDO::FETCH_ASSOC);
                if ( $query->rowCount() ){
                foreach( $query as $row ){  ?> 
                    <div class="col-xl-2 col-md-4 col-6">
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
                    </div>
                <?php }} ?>


            </div>
        </div>
    </section>
    <!-- product section end -->


    <?php include("php/footer.php"); ?>
    <script type="text/javascript">
        function evet(){
            window.location = "hediye-parfumler.php?id=<?php echo $id;?>";
        }
        function hayir(){
            window.location = "sepet.php?hayir=<?php echo $id;?>";
        }
    </script>