<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');
?>
<section id="cart_items">
		<div class="span9">
		<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Sepetim</li>
				  <li class="active">Detay </li>
				</ol>
			</div>
	         <div class="col-lg-9">
			
				
				
			<div class="table-responsive cart_info">
			<table class="table table-condensed">
			<thead>
			 <tr class="cart_menu">
			 <th style="width: 10px">Nr</th>
			 <th class="image">Adı</th>
			 <th class="image">Fiyat</th>
			 <th class="image">Miktar</th>
			 <th class="image">Tutar</th>
			 <th class="image">İptal</th>
			 </tr>
			 </thead>
			 <?php 
			 $rn=0;
			 $toplam=0;		  
		      foreach ($veriler as $rs)
				    { 
					$rn++;
					$toplam+=$rs->tutar;
					?>
					
             <tr>
			 <td style="width: 10px"><?=$rn?></td>
			 <td><?=$rs->adi?></td>
			 <td><?=$rs->fiyat?>TL</td>
			 <td><?=$rs->adet?></td>
			 <td><?=$rs->tutar?>TL</td>
			 <td><a href="<?=base_url()?>uye/siparissil/<?=$rs->id?>" onclick="return confirm('İptal Edilecek Emin Misiniz?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</a></td>
			
			 </tr> 
			 <?php
					}
					?>	
							
					</table>
					<div class="col-sm-6">
					<div class="total_area">
						<a class="btn btn-default update" type="submit" >Toplam :<?=$toplam?> TL</a>
						
					</div>
				</div>


					</div>
					</div>
					</div>
				</section>

				</div>
				</div>
				</div>
<?php
$this->load->view('_footer');
?>