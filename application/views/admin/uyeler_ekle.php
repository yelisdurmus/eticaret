<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Üye Ekleme</h2>
						<div>
						<div><h3><font color="#54f">Üye Bilgilerini Giriniz</font></h3></div> 
						<form action="<?=base_url()?>admin/uyeler/ekle_kaydet" class="form-horizontal" method="post" id="block-validate" novalidate="novalidate">
						               
										<div class="form-group">
                                            <label class="control-label col-lg-4">Ad Soyad</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="adsoy" name="adsoy" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>
                                            <div class="col-lg-4">
                                                <input type="email" id="email" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Şifre</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="sifre" name="sifre" class="form-control">
                                            </div>
                                        </div> 
										<div class="form-group">
                                            <label class="control-label col-lg-4">Telefon</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="tel" name="tel" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Adres</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="adres" name="adres" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Şehir</label>
                                            <div class="col-lg-4">
                                               <select name="sehir"  class="validate[required] form-control">
                                                    <option value="">Şehir Seç</option>
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
                                                    <option value="">Yetki Seç</option>
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
                                                    <option value="">Durum Seç</option>
                                                    <option>Aktif</option>
                                                    <option>Pasif</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Kaydet" class="btn btn-primary btn-lg ">
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