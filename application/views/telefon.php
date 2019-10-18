<?php 
	  $this->load->view('_header');
	    $this->load->view('_sidebar');
     
          
          	
        ?>  

			    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">ÜRÜNLER</h2>
						
						<?php
						foreach($telefon as $rs)
						{ ?>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									   <a href="<?=base_url()?>home/urundetay/<?=$rs->id?>"><img width="100" height="200"src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
									   	<h2><?=$rs->sfiyat?>TL</h2>
										<p><h3><?=$rs->adi?><h3></p>
										<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Urun Detay</a>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						
					</div><!--features_items-->
					

					
					
				</div>
			</div>
		</div>
		
	</div>
	  <?php 
	  $this->load->view('_footer');
      
          
          	
        ?> 
	