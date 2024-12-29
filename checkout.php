<?php 
$arrayH = ["2","3","4","5","6","10","14","16","20","22"];
date_default_timezone_set('Europe/Istanbul');
$h = date("H");
if(in_array($h,$arrayH)){
    include("php/connect.php");
}
else{
    include("php/connect.php");
}



?>
<?php include("php/header.php"); ?>
<?php include("logo.php"); ?>
<?php
$allItems = $cart->getItems();
?>
<title><?php echo $logo." | Alışverişi Tamamla";?></title>
</head>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2828032584087295');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2828032584087295&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<body class="theme-color-1">

        <?php include("php/navbar.php"); ?>


    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">


                    <?php
                
                
                if($_POST){
                $isim = $_POST["isim"];
                $soyisim = $_POST["soyisim"];
                $telefon = $_POST["tel"];
                $sehir = $_POST["sehir"];
                $ilce = $_POST["ilce"];
                $adres = $_POST["adres"];
                $odemeYontemi = $_POST["odeme"];
                $siparisTutari = $cart->getAttributeTotal('fiyat');
                    
                //****  toplam tutar *****////
                if($isim == "" || $soyisim == "" || $telefon == "" || $sehir == "" || $ilce == "" || $adres == "" || $odemeYontemi == ""){
                        echo "<script>alert('Lütfen boş alan bırakmayın.');</script>";
                        echo '<meta http-equiv="refresh" content="0;URL=checkout.php">';
                }
                else{

                foreach ($allItems as $items) {
                    foreach ($items as $item){
                        if($item['attributes']['fiyat'] == ""){
                            $hediyead .= "_".$item['attributes']["baslik"]."_";
                        }else{
                            $urunx .= "_".$item['attributes']['baslik']."_";
                        }
                    }
                }               

                
                    date_default_timezone_set('Europe/Istanbul');
                    $onayTarihi = date('d.m.Y H:i:s');

                    $query = $conn->prepare("INSERT INTO parfum SET
                    adSoyad = ?,
                    telefon = ?,
                    sehir = ?,
                    ilce = ?,
                    adres = ?,
                    siparisTutar = ?,
                    urun = ?,
                    hediye = ?,
                    personelNot = ?,
                    referans = ?,
                    odemeYontemi = ?,
                    kargoYontemi = ?,
                    kayitYontemi = ?,
                    tarih = ?,
                    onayTarihi = ?");
                    $insert = $query->execute(array(
                         $isim." ".$soyisim, $telefon, $sehir, $ilce, $adres, $siparisTutari, $urunx, $hediyead, "", $_SERVER["HTTP_HOST"], $odemeYontemi, "ptt", "yeni", $onayTarihi, $onayTarihi
                    ));
                    if ( $insert ){
                        $last_id = $conn->lastInsertId();
                        echo '<meta http-equiv="refresh" content="0;URL=basarili.php?id='.$last_id.'">';
                    }
                    else{
                        echo "<script>alert('Sipariş Oluşturulma Sırasında Hata Oldu Lütfen Daha Sonra Tekrar Deneyin');</script>";
                        echo '<meta http-equiv="refresh" content="0;URL=checkout.php">';
                    }
                

                }

                }


                
                ?>

                    <form class="checkout-form" method="POST" action="">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Teslimat Bilgileri</h3>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Ödeme Tipi</div>
                                        <select id="odeme" name="odeme">
                                            <option value="nakit">Kapıda Nakit Ödeme</option>
                                            <option value="kredi">Kapıda Kredi Kartı ile Ödeme(Tek Çekim)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">İsim</div>
                                        <input type="text" placeholder="İsim" name="isim" id="isim">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Soyisim</div>
                                        <input type="text" placeholder="Soyisim" name="soyisim" id="soyisim">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Telefon</div>
                                        <input type="text" placeholder="Telefon" name="tel" id="phone2" tabindex="2">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Şehir</div>
                                        <select id="sehir" name="sehir">
                                            <option value="İstanbul" selected="">İstanbul</option>
                                            <option value="Ankara">Ankara</option>
                                            <option value="İzmir">İzmir</option>
                                            <option value="Adana">Adana</option>
                                            <option value="Adıyaman">Adıyaman</option>
                                            <option value="Afyon">Afyon</option>
                                            <option value="Ağrı">Ağrı</option>
                                            <option value="Aksaray">Aksaray</option>
                                            <option value="Amasya">Amasya</option>
                                            <option value="Antalya">Antalya</option>
                                            <option value="Ardahan">Ardahan</option>
                                            <option value="Artvin">Artvin</option>
                                            <option value="Aydın">Aydın</option>
                                            <option value="Balıkesir">Balıkesir</option>
                                            <option value="Bartın">Bartın</option>
                                            <option value="Batman">Batman</option>
                                            <option value="Bayburt">Bayburt</option>
                                            <option value="Bilecik">Bilecik</option>
                                            <option value="Bingöl">Bingöl</option>
                                            <option value="Bitlis">Bitlis</option>
                                            <option value="Bolu">Bolu</option>
                                            <option value="Burdur">Burdur</option>
                                            <option value="Bursa">Bursa</option>
                                            <option value="Çanakkale">Çanakkale</option>
                                            <option value="Çankırı">Çankırı</option>
                                            <option value="Çorum">Çorum</option>
                                            <option value="Denizli">Denizli</option>
                                            <option value="Diyarbakır">Diyarbakır</option>
                                            <option value="Düzce">Düzce</option>
                                            <option value="Edirne">Edirne</option>
                                            <option value="Elazığ">Elazığ</option>
                                            <option value="Erzincan">Erzincan</option>
                                            <option value="Erzurum">Erzurum</option>
                                            <option value="Eskişehir">Eskişehir</option>
                                            <option value="Gaziantep">Gaziantep</option>
                                            <option value="Giresun">Giresun</option>
                                            <option value="Gümüşhane">Gümüşhane</option>
                                            <option value="Hakkari">Hakkari</option>
                                            <option value="Hatay">Hatay</option>
                                            <option value="Iğdır">Iğdır</option>
                                            <option value="Isparta">Isparta</option>
                                            <option value="Kars">Kars</option>
                                            <option value="Kastamonu">Kastamonu</option>
                                            <option value="Kayseri">Kayseri</option>
                                            <option value="Kırıkkale">Kırıkkale</option>
                                            <option value="Kırklareli">Kırklareli</option>
                                            <option value="Kırşehir">Kırşehir</option>
                                            <option value="Kocaeli">Kocaeli</option>
                                            <option value="Konya">Konya</option>
                                            <option value="Kütahya">Kütahya</option>
                                            <option value="Malatya">Malatya</option>
                                            <option value="Manisa">Manisa</option>
                                            <option value="Mersin">Mersin</option>
                                            <option value="Kahramanmaraş">Kahramanmaraş</option>
                                            <option value="Karabük">Karabük</option>
                                            <option value="Karaman">Karaman</option>
                                            <option value="Kilis">Kilis</option>
                                            <option value="Mardin">Mardin</option>
                                            <option value="Muğla">Muğla</option>
                                            <option value="Muş">Muş</option>
                                            <option value="Nevşehir">Nevşehir</option>
                                            <option value="Niğde">Niğde</option>
                                            <option value="Ordu">Ordu</option>
                                            <option value="Osmaniye">Osmaniye</option>
                                            <option value="Rize">Rize</option>
                                            <option value="Sakarya">Sakarya</option>
                                            <option value="Samsun">Samsun</option>
                                            <option value="Siirt">Siirt</option>
                                            <option value="Sinop">Sinop</option>
                                            <option value="Sivas">Sivas</option>
                                            <option value="Tekirdağ">Tekirdağ</option>
                                            <option value="Tokat">Tokat</option>
                                            <option value="Trabzon">Trabzon</option>
                                            <option value="Tunceli">Tunceli</option>
                                            <option value="Şanlıurfa">Şanlıurfa</option>
                                            <option value="Şırnak">Şırnak</option>
                                            <option value="Uşak">Uşak</option>
                                            <option value="Van">Van</option>
                                            <option value="Yalova">Yalova</option>
                                            <option value="Yozgat">Yozgat</option>
                                            <option value="Zonguldak">Zonguldak</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">İlçe</div>
                                        <input type="text" placeholder="İlçe" name="ilce" id="ilce">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">Adres</div>
                                        <textarea name="adres" id="adres" style="height: 100px !important;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-xs-12">
                                <div class="checkout-details shadow rounded">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Ürün <span>Fiyat</span></div>
                                        </div>
                                        <ul class="qty">
                                            <?php
                                                foreach ($allItems as $items) {
                                                    foreach ($items as $item) {
                                                        $fiyat = 0;
                                                        if($item['attributes']['fiyat'] != 0){
                                                            $fiyat = $item['attributes']['fiyat'];
                                                        }
                                                    echo '<li>'.$item['attributes']['baslik'].' × '.$fiyat.' ₺</li>';
                                                    }
                                                }
                                                ?>
                                        </ul>
                                        <?php
                                            $toplam = $cart->getAttributeTotal('fiyat');
                                        ?>
                                        <ul class="total">
                                            <li>Kargo <span class="count text-dark">0 ₺</span></li>
                                        </ul>
                                        <ul class="total">
                                            <li>Toplam <span class="count"><?php echo isset($toplam) ? $toplam : '0' ?> ₺</span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                        <button type="submit" class="bg-success p-3 text-white rounded btn btn-block">Alışverişi Tamamla</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

<?php include("php/footer.php");?>