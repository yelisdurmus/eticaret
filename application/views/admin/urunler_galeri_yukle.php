<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Ürün Resim Galeri Ekleme</h2>
						<div>
						<h5><font color="#54f">Eklenecek Resmi Seçiniz</font></h5>
						*Yüklenecek resim dosyası türleri (gif|jpg|png) max boyutlar 1024x1024, boyut: 1000kb
						<?php if($this->session->flashdata("mesaj")) {?>
						<div class="alert alert-success">
                                <a href="#" class="alert-link"></a>
								<p><?=$this->session->flashdata("mesaj")?></p>
                            </div>
						<?php }?>
						<form action="<?=base_url()?>admin/urunler/galeri_kaydet/<?=$id?>" enctype="multipart/form-data" class="form-horizontal" method="post" id="block-validate" novalidate="novalidate">
						               
										<div class="form-group">
                                            <label class="control-label col-lg-4"></label>
                                            <div class="col-lg-4">
                                                <input type="file" id="resim" name="resim" placeholder="Yüklemek İçin Gözat" class="form-control" onchange="this.form.submit()">
                                            </div>
                                        </div>                                        
										<div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Resim Yükle" class="btn btn-primary btn-lg ">
                                        </div>
									</form>
									<?php foreach($veriler as $rs){?>
									<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="200">
									<a href="<?=base_url()?>admin/urunler/galeri_sil/<?=$id?>/<?=$rs->id?>"onclick="return confirm('Silinecek Emin misin?')" class="btn btn-danger btn-sm">Sil</a>
									<?php }?>
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