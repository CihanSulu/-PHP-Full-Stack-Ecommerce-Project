<?php
									include("../php/connect.php");
									include("../seo.php");
									$sayfa = @$_GET["id"]+1;
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
                                    $limit = ($sayfa - 1) * $sayfada;
                                    $query = $conn->query("SELECT * FROM icerik where stok>0 order by id DESC LIMIT ".$limit.",".$sayfada."", PDO::FETCH_ASSOC);
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