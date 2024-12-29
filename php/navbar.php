<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9QSBSC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    

<!-- header start -->
    <header class="header-2">
        <div class="mobile-fix-option"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu border-section border-top-0 "> 
                        <div class="menu-left" style="visibility: hidden;">
                            <div class="navbar"><a href="javascript:void(0)" onclick="openNav()"><i
class="fa fa-bars sidebar-bar" aria-hidden="true"></i></a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                </div>
                            </div>
                        </div>
                        <div class="brand-logo layout2-logo">
                            <a href="/"><img src="assets/images/logo.png" width="350px" class="img-fluid  lazyload"
                                    alt=""></a>
                        </div>
                        <div class="menu-right pull-right">
                            <div class="icon-nav">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-nav-center">
                        <nav id="main-nav">
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal pt-2">
                                <li>
                                    <div class="mobile-back text-end">Geri Dön<i class="fa fa-angle-right ps-2"
    aria-hidden="true"></i></div>
                                </li>
                                <li><a href="/">Anasayfa</a></li>
                                <li><a href="bayan-parfumleri.php">Kadın Parfümleri</a><div class="lable-nav">%70 İNDİRİMLİ</div></li>
                                <li><a href="erkek-parfumleri.php">Erkek Parfümleri</a><div class="lable-nav">%70 İNDİRİMLİ</div></li>
                                <li><a href="unisex-parfumleri.php">Unisex Parfümler</a><div class="lable-nav">%70 İNDİRİMLİ</div></li>
                                <li><a href="https://api.whatsapp.com/send?phone=<?php echo $wp; ?>&text=%20Parfüm%20Siparişi%20Vermek%20İstiyorum." target="_blank">Whatsapp</a><div class="lable-nav wp"><i class="fa-brands fa-whatsapp"></i> İletişim</div></li>
                                <li style="position: relative; top:-5px;"><a href="javascript:void(0);" onclick="openSearch()"><img src="assets/images/icon/search.png"> <span class="d-xl-none">Arama Yap</span></a></li>
                                <li style="position: relative; top:-5px;"><a href="sepetim.php" style="padding-right: 0px !important;display: inline-block;"><img src="assets/images/icon/cart.png"> <span class="d-xl-none">Sepetim</span><span class="cart_qty_cls"><?=$cart->getTotalItem();?></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="search-overlay" class="search-overlay">
        <div> <span class="closebtn" onclick="closeSearch()"
                title="Close Overlay">×</span>
            <div class="overlay-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <form action="arama" method="get">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="arama"  placeholder="Aranacak Ürünü Girin">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header end -->
