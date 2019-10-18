<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Ürün Ekleme</h2>
						<div>
						<div><h3><font color="#54f">Ürün Bilgilerini Giriniz</font></h3></div> 
						<form action="<?=base_url()?>admin/urunler/ekle_kaydet" class="form-horizontal" method="post" id="block-validate" novalidate="novalidate">
						               
										<div class="form-group">
                                            <label class="control-label col-lg-4">Adı</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="adi" name="adi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Kategori</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="kategori" name="kategori" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Alış Fiyatı</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="afiyat" name="afiyat" class="form-control">
                                            </div>
                                        </div> 
										<div class="form-group">
                                            <label class="control-label col-lg-4">Satış Fiyatı</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="sfiyat" name="sfiyat" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Resim</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="resim" name="resim" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Galeri</label>
                                            <div class="col-lg-4">
                                               <select name="galeri"  class="validate[required] form-control">
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