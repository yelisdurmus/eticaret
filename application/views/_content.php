                <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Yeni Ürünler</h2>
						<?php 
						foreach($yeni as $rs)
						{?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>"><img width="100" height="200" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
											<h2><?=$rs->sfiyat?>TL</h2>
											<p><?=$rs->adi?></p>
											<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>" height=357 title="add-to-cart"class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Urun Detay</a>
										</div>
								</div>
							</div>
						</div>
						<?php }?>
					</div><!--features_items-->
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#telefon" data-toggle="tab">Telefon&Aksesuar </a></li>
								<li><a href="#bilgisayar" data-toggle="tab">Bilgisayar</a></li>
								<li><a href="#televizyon" data-toggle="tab">Televizyon</a></li>
								<li><a href="#kamera" data-toggle="tab">Fotagraf&Kamera </a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="telefon" >
							 <?php
								foreach($telefon as $rs)
								{
							    ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
												<h2><?=$rs->sfiyat?>TL</h2>
												<p><?=$rs->adi?></p>
												<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Urun Detay</a>
											</div>
											
										</div>
									</div>
								</div>
							 <?php
							   }?>
							</div>
							<div class="tab-pane fade in" id="bilgisayar" >
							 <?php
								foreach($bilgisayar as $rs)
								{
							    ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" />
												<h2><?=$rs->sfiyat?>TL</h2>
										        <p><h3><?=$rs->adi?><h3></p>
												<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Urun Detay</a>
											</div>
											
										</div>
									</div>
								</div>
							 <?php
							   }?>
							</div>
							<div class="tab-pane fade in" id="televizyon" >
							 <?php
								foreach($televizyon as $rs)
								{
							    ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" />
												<h2><?=$rs->sfiyat?>TL</h2>
										        <p><h3><?=$rs->adi?><h3></p>
												<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Urun Detay</a>
											</div>
											
										</div>
									</div>
								</div>
							 <?php
							   }?>
							</div>
							<div class="tab-pane fade in" id="kamera" >
							 <?php
								foreach($kamera as $rs)
								{
							    ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" />
												<h2><?=$rs->sfiyat?>TL</h2>
										        <p><h3><?=$rs->adi?><h3></p>
												<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Urun Detay</a>
											</div>
											
										</div>
									</div>
								</div>
							 <?php
							   }?>
							</div>
						</div>
					</div>
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Güncel Ürünler</h2>
						<?php foreach($random as $rs)
						 {?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
							  <div class="single-products">
									<div class="productinfo text-center">
									   <a href="<?=base_url()?>home/urundetay/<?=$rs->id?>"><img width="100" height="200"src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
									   	<h2><?=$rs->sfiyat?>TL</h2>
										<p><h3><?=$rs->adi?><h3></p>
										<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Urun Detay</a>
									</div>
									</div>
								</div>
						</div>
						<?php }?>
					</div><!--features_items-->
			    </div>
	        </div>
		</div>
	</section>
