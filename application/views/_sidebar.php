<section>
	<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
					 <?php
						if ($this->session->userdata("uye_session"))
					 {?>
						<div class="brands_products"><!--brands_products-->
							
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<h2><?=$this->session->uye_session["adsoy"]?></h2>
								<li><a href="<?=base_url()?>uye/hesabim">Hesap Bilgileri</a></li>
								<li><a href="<?=base_url()?>uye/sepetim">Sepetim</a></li>
								<li><a href="<?=base_url()?>uye/siparisler">Siparişlerim</a></li>
								<li><a href="<?=base_url()?>uye/cikis">Çıkış</a></li>
								</ul>
							</div>
						</div><!--/category-products-->
					  <?php
					  }
					  ?>
						<div class="brands_products"><!--brands_products-->
							<h2>Kategori</h2>
							<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#kitap">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Telefon&Aksesuar
										</a>
									</h4>
								</div>
								<div id="kitap" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											
											<?php
											 foreach($kategoriler as $rs) {  ?>
											    <?php if($rs->parent_id==1){  ?>
												<li><a href="<?=base_url()?>kategori/<?=$rs->parent_id?>"><?=$rs->adi?></a></li>
												<?php } ?>
                                                
											<?php } ?>
											
											
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#dergi">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Bilgisayar
										</a>
									</h4>
								</div>
								<div id="dergi" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
											 foreach($kategoriler as $rs) {  ?>
											    <?php if($rs->parent_id==2){  ?>
												<li><a href="<?=base_url()?>kategori/<?=$rs->parent_id?>"><?=$rs->adi?></a></li>
												<?php } ?>
                                                
											<?php } ?>
											
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#film">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Televizyon
										</a>
									</h4>
								</div>
								<div id="film" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
											 foreach($kategoriler as $rs) {  ?>
											    <?php if($rs->parent_id==3){  ?>
												<li><a href="<?=base_url()?>kategori/<?=$rs->parent_id?>"><?=$rs->adi?></a></li>
												<?php } ?>
                                                
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#fotograf">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Fotagraf&Kamera 
										</a>
									</h4>
								</div>
								<div id="fotograf" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
											 foreach($kategoriler as $rs) {  ?>
											    <?php if($rs->parent_id==4){  ?>
												<li><a href="<?=base_url()?>kategori/<?=$rs->parent_id?>"><?=$rs->adi?></a></li>
												<?php } ?>
                                                
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>	
						</div><!--/category-products-->
						</div><!--/brands_products-->
					
					</div>
				</div>
            