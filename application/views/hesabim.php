<?php
        $this->load->view('_header');?>	
<?php   $this->load->view('_uyesidebar');
 ?>
         <div class="brands-name">
            <div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<h3>Üye Hesap Bilgileri</h3>
							<form method="post" action="<?=base_url()?>uye/uye_guncelle">
							 <?php if ($this->session->flashdata("mesaj")) {?>
							 <div class="companyinfo">
							    <p><?=$this->session->flashdata("mesaj")?></p>
							 </div>
							 <?php }?>
								<input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>"placeholder="Adınız Soyadınız">
								<input type="text" name="tel" value="<?=$uye[0]->tel?>"placeholder="Telefon Numarası">
								<input type="email" name="eposta" value="<?=$uye[0]->email?>"placeholder="Email">
								<input type="password" name="sifre" value="<?=$uye[0]->sifre?>" placeholder="Şifrenizi giriniz">
								<input type="text" name="adres" value="<?=$uye[0]->adres?>"placeholder="Adres">
								<input type="text" name="sehir" value="<?=$uye[0]->sehir?>"placeholder="Şehir">
								<button type="submit" class="btn btn-default">Bilgileri Güncelle</button>
							</form>
							
							
						</div>
					</div>
				</div>
			</div>
			</div>
        <div>
	</div>
</section>
<?php
        $this->load->view('_footer');
?>