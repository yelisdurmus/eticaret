<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Ürün Resim Ekleme</h2>
						<div>
						<h5><font color="#54f">Eklenecek Resmi Seçiniz</font></h5>
						*Yüklenecek resim dosyası türleri (gif|jpg|png) max boyutlar 1024x1024, boyut: 1000kb
						<?php if($this->session->flashdata("mesaj")) {?>
						<div class="alert alert-success">
                                <a href="#" class="alert-link">Hata</a>
								<p><?=$this->session->flashdata("mesaj")?></p>
                            </div>
						<?php }?>
						<form action="<?=base_url()?>admin/urunler/resim_kaydet/<?=$id?>" enctype="multipart/form-data" class="form-horizontal" method="post" id="block-validate" novalidate="novalidate">
						               
										<div class="form-group">
                                            <label class="control-label col-lg-4"></label>
                                            <div class="col-lg-4">
                                                <input type="file" id="resim" name="resim" class="form-control">
                                            </div>
                                        </div>                                        
										<div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Resim Yükle" class="btn btn-primary btn-lg ">
                                        </div>
									</form>
									<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="200">
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