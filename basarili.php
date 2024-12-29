<?php
include("php/connect.php");
$cart->clear();
?>
<?php include("php/header.php"); ?>
<?php include("logo.php"); ?>


<?php 

$idal=@$_GET["id"];
$query = $conn->query("SELECT * FROM pixel WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
    $fpixel = $query["fpixel"];
}



$query2 = $conn->query("SELECT * FROM parfum WHERE id = $idal")->fetch(PDO::FETCH_ASSOC);
if ( !$query2 ){
   exit();
}



?>

<title><?php echo $logo." | Siparişiniz Alındı";?></title>

 <!-- Global site tag (gtag.js) - Google Ads: 666119149 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-666119149"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-666119149');
</script>

<!-- Event snippet for Satın alma conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-666119149/V-gcCNCR7MgBEO3X0L0C',
      'transaction_id': ''
  });
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K9QSBSC');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K9QSBSC');</script>
<!-- End Google Tag Manager -->

</head>

<body class="theme-color-1">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9QSBSC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9QSBSC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include("php/navbar.php"); ?>



        <!-- section start -->
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="error-section" style="padding:30px 0 70px;">
                        <h2 class="text-success">Siparişiniz Başarıyla Alındı</h2>
                        <p>Siparişiniz bize ulaştı en yakın sürede onay için aranıp ardından kargonuzu size ulaştıracağız.</p>
                        <a href="/" class="btn btn-success p-3 text-white">Anasayfaya Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <?php include("php/footer.php"); ?>