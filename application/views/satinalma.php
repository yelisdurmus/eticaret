<?php
$this->load->view('_header');
?>
            <div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Satınalma Sayfası</li>
				</ol>
			</div>
<?php
$this->load->view('_uyesidebar');
?>
	<section id="do_action">
		<div class="container">
		
			<div class="heading">
			<?php if ($this->session->flashdata("mesaj")) {?>
							<div class="signup-form">
							    <p><?=$this->session->flashdata("mesaj")?></p>
							</div>
					 <?php }?>
				<h3>Teslimat Bilgileri</h3>
			</div>
			
		  <div class="row">
			<form action="<?=base_url()?>uye/siparis_tamamla" method="post">
				<div class="col-sm-6">
				   <div class="total_area">
					    <ul>
							<li>Adınız Soyadınız <sup>*</sup> <input type="text" name="adsoy" value=" <?=$uye[0]->adsoy?>" placeholder=" Adınız Soyadınız"/></li>
							<li>Telefon Numarası <sup>*</sup> <input type="text" name="tel" value="  <?=$uye[0]->tel?>"placeholder="  Telefon Numarası"/></li>
							<li>Adres <sup>*</sup> <input type="text" name="adres" value="<?=$uye[0]->adres?>"  placeholder=" Adres"/></li>
							<li>Şehir <sup>*</sup> <input type="text" name="sehir" value="  <?=$uye[0]->sehir?>"  placeholder=" Şehir"/></li>
							<li>Toplam <sup>*</sup> <input type="text" name="toplam" value="<?=$toplam?>"  placeholder=" Toplam Tutar"/></li>
							
					    </ul>
						<button type="submit" class="btn btn-fefault cart" value="Siparişi Tamamla">
										<i class="fa fa-shopping-cart"></i>
									Siparişi Tamamla
						</button>
					</div>	
				</div>
			</form>
          </div>
		</div>
	</section><!--/#do_action-->

<?php
$this->load->view('_footer');
?>