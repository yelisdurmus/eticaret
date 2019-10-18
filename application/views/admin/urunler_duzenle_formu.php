<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Ürün Düzenleme Menüsü</h2>
						<div>
						<div><h3><font color="#54f">Ürün Bilgilerini Giriniz</font></h3></div> 
						<form action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->id?>" class="form-horizontal" method="post" id="block-validate" novalidate="novalidate">
						               
										<div class="form-group">
                                            <label class="control-label col-lg-4">Adı</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="adi" name="adi" value="<?=$veri[0]->adi?>"class="form-control">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Açıklama</label>
                                            <div class="col-lg-4">
                                                <textarea name="aciklama" rows=10 cols=100><?=$veri[0]->aciklama?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Kategorisi</label>
                                            <div class="col-lg-4">
                                               <select name="kategori"  class="validate[required] form-control">
                                                    <option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
                                                    <?php foreach($veriler as $rs) {?>
													<option value="<?=$rs->id?>"><?=$rs->adi?></option>
                                                    <?php }?>
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
    <script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
    <script src="<?=base_url()?>assets/admin/plugins/bootstrap-wysihtml5-hack.js"></script>
   
    <script>
        $(function () { CKEDITOR.replace('aciklama')
$('.textarea').wysihtml5()		});
        </script>

     <!--END PAGE LEVEL SCRIPTS -->
