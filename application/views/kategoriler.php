
		<div class="container">
			<div class="row">
				
					   <h2>KATEGORİ</h2>
						<ul class="nav nav-pills nav-stacked">
						<div id="kategoriler">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									
									<?php  foreach ($telefon as $rs) {
										?>
										<li><a  href="<?=base_url()?>kategoriler/<?=$rs->id?>"  ><span class="pull-right"></span><?=$rs->adi?></a></li>
								    <?php } ?>
									</h4>
									
								</div>
								</div>
								</div>
								
								
					
						