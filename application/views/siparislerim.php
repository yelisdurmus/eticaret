  <?php 
		$this->load->view('_header');?>
	<?php	$this->load->view('_uyesidebar');
	?>
<?php if ($this->session->flashdata("mesaj")) {?>
				<div class="form-group col-md-6">
					<p><?=$this->session->flashdata("mesaj")?></p>
				</div>
			<?php }?>
<section id="cart_items">
   <div class="span9">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Siparisler</li>
				</ol>
			</div>
       <div class="col-lg-9">
         <div class="table-responsive cart_info">
              <table class="table table-condensed">
                <thead>
                  <tr class="cart_menu">
                    <th class="image" style="width: 10px">Numara</th>
					<th class="image">Tarih</th>
                    <th class="image">Adı</th>
                    <th class="image">Tutar</th>
                    <th class="image">Şehir</th>
					<th class="image">Durumu</th>
					<th class="image">Detay</th>
					<th class="image">iptal</th>
					</tr>
					</tr>
                </thead>
                <tbody>
				<?php 
				$rn=0;
				foreach($veriler as $rs)
				{
					$rn++;
					?>
                  <tr>
                    <td class="cart_product"><?=$rn?></td>
                    <td><?=$rs->tarih?></td>
                    <td><?=$rs->adsoy?></td>
					<td><?=$rs->tutar?></td>
					<td><?=$rs->sehir?></td>
					<td>
					<?php if($rs->siparisdurumu=="kargoda")
					{?>
				       <a href="<?=$rs->kargo?>" target="_blank" class="btn btn-success btn-xs" >Kargo Takip </a>
					<?php }?>
					<?=$rs->siparisdurumu?>
					</td>
					<td> <a href="<?=base_url()?>Uye/siparisdetay/<?=$rs->id?>" class="btn btn-success btn-xs"> <span class="fa fa-edit"> </span> Detay <a/>
					 <td><a href="<?=base_url()?>uye/siparissill/<?=$rs->id?>" onclick="return confirm('İptal Edilecek Emin Misiniz?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>iptal</a></td>
                  </tr>
             <?php 
				}
				?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
	  </section>
</div>
	</div>
	</div>
	</div>
<?php 
	  $this->load->view('_footer');
	
	?>
			