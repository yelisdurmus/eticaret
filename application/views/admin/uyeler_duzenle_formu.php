<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Üye Düzenleme Menüsü</h2>
						<div>
						<div><h3><font color="#54f">Üye Bilgilerini Giriniz</font></h3></div> 
						<form action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->id?>" class="form-horizontal" method="post" id="block-validate" novalidate="novalidate">
						               
										<div class="form-group">
                                            <label class="control-label col-lg-4">Ad Soyad</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="adsoy" name="adsoy" value="<?=$veri[0]->adsoy?>"class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>
                                            <div class="col-lg-4">
                                                <input type="email" id="email" name="email" value="<?=$veri[0]->email?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Şifre</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="sifre" name="sifre" value="<?=$veri[0]->sifre?>" class="form-control">
                                            </div>
                                        </div> 
										<div class="form-group">
                                            <label class="control-label col-lg-4">Telefon</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="tel" name="tel" value="<?=$veri[0]->tel?>" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Adres</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="adres" name="adres" value="<?=$veri[0]->adres?>" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Şehir</label>
                                            <div class="col-lg-4">
                                               <select name="sehir"  class="validate[required] form-control">
                                                    <option><?=$veri[0]->sehir?></option>
                                                    <option>Ankara</option>
                                                    <option>İstanbul</option>
                                                    <option>Bursa</option>
													<option>Karabük</option>
													<option>Bingöl</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Yetki</label>
                                            <div class="col-lg-4">
                                               <select name="yetki"  class="validate[required] form-control">
                                                    <option><?=$veri[0]->yetki?></option>
                                                    <option>Uye</option>
                                                    <option>Satıcı</option>
                                                    <option>Yorumcu</option>
													<option>Yazıcı</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Durum</label>
                                            <div class="col-lg-4">
                                               <select name="durum"  class="validate[required] form-control">
                                                    <option><?=$veri[0]->durum?></option>
                                                    <option>Aktif</option>
                                                    <option>Pasif</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Güncelle" class="btn btn-primary btn-lg ">
                                        </div>
									</form>
									</div>
				 </div>
                </div>

                <hr />




            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>
<?php
		$this->load->view('admin\_footer');
?> 