<!-- Whatsapp Icon Start -->
<div class="container-fluid custom-whatsapp">
    <div class="row">
        <div class="col pb-2">
            <div class="wsk-float">
                <a href="https://api.whatsapp.com/send?phone=<?php echo $wp; ?>&amp;text= Parfüm Siparişi Vermek İstiyorum." target="_blank" class="pulse-button"></a>
            </div>
        </div>
    </div>
</div>
<!-- Whatsapp Icon End -->


 <!-- footer start -->
    <footer class="footer-light">
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo"><h3>Biz Kimiz</h3></div>
                            <p>2016 yılında İstanbul’da kurulan Amber Bahçesi ekibi olarak, kuruluşumuzdan bu yana siz değerli müşterilerimize, en şatafatlı tester parfüm kokularını en hesaplı fiyatlardan vermeyi amaç olarak edinmiş bulunmaktayız. Profesyonel ekibimiz ile en güvenilir ve en hızlı gönderimi sağlayarak, çevrenizde adeta bir yıldız gibi parıldayacaksınız.</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Sayfalar</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="bayan-parfumleri.php">Kadın Parfümleri</a></li>
                                    <li><a href="erkek-parfumleri.php">Erkek Parfümleri</a></li>
                                    <li><a href="unisex-parfumleri.php">Unisex Parfümler</a></li>
                                    <li><a href="hakkimizda.php">Hakkımızda</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>İletişim</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-phone"></i><a href="https://api.whatsapp.com/send?phone=<?php echo $wp; ?>&amp;text= Parfüm Siparişi Vermek İstiyorum." target="_blank">Whatsapp: <?php echo $wp; ?></a></li>
                                    <li><i class="fa fa-envelope"></i>Email: <a href="#">info@<?=str_replace(' ','',$logo); ?>.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright © <?php echo $logo;  ?>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- tap to top start -->
    <div class="tap-top" style="background-color: #e74c3c   ;">
        <div><i class="fa-solid fa-arrow-up-short-wide"></i></div>
        <span class="text-dark" style="font-size: 14px;display: inline-flex;">Yukarı Çık</span>
    </div>

    <?php if(!isset($_SESSION["popup"])){?>
        <!--modal popup start
        <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body modal6">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-bg">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="offer-content"><img src="../assets/images/Offer-banner.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <h2>Başlık</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis ac ligula in viverra. Nunc vitae lectus felis. Duis id enim ante. Praesent vehicula est eu enim molestie vehicula. Vivamus non pretium dui, nec efficitur lectus. Proin vulputate nulla ut dui iaculis, eu commodo sem blandit. Integer molestie vitae lorem at mollis.Vivamus quis mollis mi, ac scelerisque neque. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis eu pretium magna, in maximus orci. Sed eget quam tortor. Phasellus eleifend a dui a maximus. Nam a varius quam, quis iaculis mi. Morbi vitae suscipit lorem. Nulla ultrices, sem et aliquam malesuada, magna elit condimentum tortor, et ornare ipsum velit non orci. Curabitur vehicula augue id purus venenatis, ut rutrum justo ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas sed dui vestibulum, dignissim mauris eu, pharetra mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut a bibendum tellus. Aliquam hendrerit mi vitae lobortis tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--modal popup end-->
    <?php $_SESSION["popup"] = "true"; } ?>


    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- timer js-->
    <script src="assets/js/timer1.js"></script>

    <!-- slick js-->
    <script src="assets/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="assets/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Owl -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        new WOW().init();
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
        if ($(window).width() > '576') {
            $('footer').footerReveal();
        }
    </script>

    <!-- Custom -->
    <script type="text/javascript">
        $("#arama").click(function(){
            $(".searchBox").fadeIn();
            });
            $(".close").click(function(){
                $(".searchBox").fadeOut();
            });

    function arama(){
        $(".searchBox").fadeIn();
    }
    </script>


    <script type="text/javascript">
        $(".kategorisecimbtn").click(function(){
            var deger = $(this).attr("data-type");
            $(".kategorisecimbtn").removeClass("activekategori");
            $(this).addClass("activekategori");

            if(deger == "erkek"){
                $(".hediyelerimizx").hide();
                $(".erkek").fadeIn(); 
            }
            else if(deger == "kadin"){
                $(".hediyelerimizx").hide();
                $(".bayan").fadeIn(); 
            }
            else if(deger == "unisex"){
                $(".hediyelerimizx").hide();
                $(".unisex").fadeIn(); 
            }
            else{
                $(".hediyelerimizx").hide();
                $(".hediyelerimizx").fadeIn();
            }


        });
    </script>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>


