<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
						 <?php
								$say=0;
								$aktif=null;
								foreach($kampanya as $rs)
								{
									$say++;
									if($say==1)
										$aktif="active";
									else
										$aktif=null;
								?>
							 <div class="item <?=$aktif?>">
							   <a href="<?=base_url()?>home/urundetay/<?=$rs->id?>"></a>
							      <div class="col-sm-6">
									<h1><?=$rs->adi?></h1>
								   </div>
								   <div class="col-sm-6">
								  <img style="width:100" src="<?=base_url()?>uploads/<?=$rs->resim?>" class="girl img-responsive" alt="" />
								  </div>
								
							 </div>
						
								<?php }?>
							</div>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->