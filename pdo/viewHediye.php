<?php
				include("../php/connect.php");
				include("../seo.php");
				print_r($_GET);
				$sayfa = @$sayfa+1;
				$sayfada = 60;//sayfada gösterilecek içerik sayısı
				$limit = ($sayfa - 1) * $sayfada;

				$query = $conn->query("SELECT * FROM icerik where stok>0 order by id DESC LIMIT ".$limit.",".$sayfada."", PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					     foreach( $query as $row ){
					          echo '<div class="col-lg-3 col-6 mb-md-0 mb-4" data-aos="fade-down" data-aos-duration="1250">
								<div class="product-item">
									<div class="pi-pic">
										<div class="tag-sale p-0" style="background:none;width:33%;"><img src="img/kargo.png"></div>
								<div class="tag-sale" style="left:0px;background:none;"><img src="img/2al.png"></div>
										<a href="sepet.php?evet='.$row["id"].'&normalurun="'.$sayfa.'><img src="https://siparislerimiz.site/dizinler/parfum/img/'.$row["resim"].'" alt=""></a>
									</div>
									<div class="pi-text">
										<h6>00.00 ₺</h6>
										<a href="sepet.php?evet='.$row["id"].'&normalurun="'.$sayfa.'><p>'.$row["baslik"].'</p></a>
									</div>
									<div class="hediye"><a href="sepet.php?evet='.$row["id"].'&normalurun="'.$sayfa.'><button type="button" class="btn btn-success btn-block mt-4">SEPETE EKLE</button></a></div>
								</div>
							</div>';
					     }
					}
?>