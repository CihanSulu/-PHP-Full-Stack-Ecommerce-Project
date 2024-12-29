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

												$query = $conn->query("SELECT * FROM icerik where kategori like '%bayan%' and stok>0 order by id DESC LIMIT ".$limit.",".$sayfada."", PDO::FETCH_ASSOC);

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
                                                                        <a href="<?php echo seo($row["baslik"]);?>"><img src="https://siparislerimiz.site/dizinler/parfum/img/<?php echo $row["resim"]; ?>"
                                                                                class="img-fluid"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-detail">
                                                                    <div>
                                                                        <a href="<?php echo seo($row["baslik"]);?>">
                                                                            <h6><?php echo kisalt($row["baslik"], 47); ?></h6>
                                                                        </a>
                                                                        <h4><del><?php echo $row["eskifiyat"]; ?> ₺</del> <?php echo $row["fiyat"];?> ₺</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <?php  }} ?>