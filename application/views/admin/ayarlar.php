 <?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>  
   <div>   <!--PAGE CONTENT -->
     <div id="content">
         <div class="inner" style="min-height:1200px;">
             <div class="cols">
                 <div class="col-lg-12">
                     <h2>Site Ayarları</h2>
                 </div>
             </div>
		     <div id="content">
			     <div class="col-md-10">
			         <div class="panel panel-default">
				         <div class="category-tab">
				             <div class="well well-medium">
				                 <ul class="nav nav-tabs"> 
				                     <li class=""><a href="#genel" data-toggle="tab" aria-expanded="true">Genel</a></li>
				                     <li class=""><a href="#email" data-toggle="tab" aria-expanded="false" >Email</a></li>
				                     <li class=""><a href="#sosyal" data-toggle="tab" aria-expanded="false" >Sosyal</a></li>
				                     <li class=""><a href="#hakkimizda" data-toggle="tab" aria-expanded="false" >Hakkımızda</a></li>
				                     <li class=""><a href="#iletisim" data-toggle="tab" aria-expanded="false" >İletişim</a></li>
				                 </ul>
				             </div>
							 <form method="post" action="<?=base_url()?>admin/Home/ayarlar_guncelle/<?=$veri[0]->id?>">
				             <div class="tab-content">
				                 <div class="tab-pane active" id="genel" >
					                 <!-- Post-->
                                     <h4>Genel Ayarlar</h4>
					                 <div class="form-group">
						                 <label for="inputName" class="col-sm-2 control-label">Adı</label>
						                 <div class="col-sm-10">
						                     <input type="text" name="adi" value="<?=$veri[0]->adi?>"class="form-control" id="inputName" placeholder="Adı"><br>
						                 </div>
						             </div>
					                 <div class="form-group">
						                 <label for="inputName" class="col-sm-2 control-label">Description</label>
						                 <div class="col-sm-10">
						                     <input type="text" name="description" value="<?=$veri[0]->description?>"class="form-control" id="inputName" placeholder="Description"><br>
						                 </div>
						             </div>
					                 <div class="form-group">
						                 <label for="inputName" class="col-sm-2 control-label">Keywords</label>
						                 <div class="col-sm-10">
						                     <input type="text" name="keywords" value="<?=$veri[0]->keywords?>"class="form-control" id="inputName" placeholder="Keywords"><br>
						                 </div>
						             </div>
					                 <div class="form-group">
						                 <label for="inputName" class="col-sm-2 control-label">Adres</label>
						                 <div class="col-sm-10">
						                     <input type="text" name="adres" value="<?=$veri[0]->adres?>"class="form-control" id="inputName" placeholder="Adres"><br>
						                  </div>
						             </div>
					                 <div class="form-group">
					                 	 <label for="inputName" class="col-sm-2 control-label">Telefon</label>
						                 <div class="col-sm-10">
						                     <input type="text" name="tel" value="<?=$veri[0]->tel?>"class="form-control" id="inputName" placeholder="Telefon"><br>
						                 </div>
						             </div>
					                 <div class="form-group">
					                	 <label for="inputName" class="col-sm-2 control-label">Şehir</label>
					                	 <div class="col-sm-10">
						                     <input type="text" name="sehir" value="<?=$veri[0]->sehir?>"class="form-control" id="inputName" placeholder="Şehir"><br>
						                 </div>
					               	 </div>
					                 <!-- /.Post-->
				                 </div>
								 <div class="tab-pane" id="email">
				                    <h4> Email Ayarları</h4>
					                 <!-- Post-->
					                 <div class="form-group">
						                 <label for="inputName" class="col-sm-2 control-label">Smtp Server</label>
						                 <div class="col-sm-10">
						                 <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>"class="form-control" id="inputName" placeholder="Adres"><br>
						             </div>
						         </div>
					             <div class="form-group">
					                 <label for="inputName" class="col-sm-2 control-label">Smtp Email</label>
						             <div class="col-sm-10">
						                 <input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>"class="form-control" id="inputName" placeholder="Adres"><br>
						             </div>
						         </div>
					             <div class="form-group">
						             <label for="inputName" class="col-sm-2 control-label">Port</label><br>
						             <div class="col-sm-10">
						                 <input type="text" name="smtpport" value="<?=$veri[0]->smtpport?>"class="form-control" id="inputName" placeholder="Adres"><br>
						             </div>
						         </div>
					             <div class="form-group">
						             <label for="inputName" class="col-sm-2 control-label">Şifre</label><br>
						             <div class="col-sm-10">
						                 <input type="password" name="password" value="<?=$veri[0]->password?>"class="form-control" id="inputName" placeholder="Adres"><br>
						             </div>
						         </div>
					             <!-- /.Post-->
				             </div>
						     <div class="tab-pane" id="sosyal" >
				                 <h4>Sosyal Medya Ayarları</h4>
					             <!-- Post-->
					             <div class="form-group">
						             <label for="inputName" class="col-sm-2 control-label">Facebook</label>
						             <div class="col-sm-10">
						                 <input type="email" class="form-control" id="inputName" placeholder="Facebook"><br>
						             </div>
						         </div>
						         <div class="form-group">
						             <label for="inputName" class="col-sm-2 control-label">Instagram</label>
						             <div class="col-sm-10">
						                 <input type="email" class="form-control" id="inputName" placeholder="Instagram"><br>
						             </div>
						         </div>
						         <div class="form-group">
						             <label for="inputName" class="col-sm-2 control-label">Twitter</label>
						             <div class="col-sm-10">
						                 <input type="email" class="form-control" id="inputName" placeholder="Twitter"><br>
						             </div>
						         </div>
						         <div class="form-group">
						             <label for="inputName" class="col-sm-2 control-label">Pinterest</label>
						             <div class="col-sm-10">
						                 <input type="email" class="form-control" id="inputName" placeholder="Pinterest"><br>
						             </div>
						         </div>
							     <!-- /.Post-->
				             </div>
				             <div class="tab-pane " id="hakkimizda" >
				                 <h4>Hakkımızda Bilgileri</h4>
					             <textarea name="editor1" id="editor1" rows="15" cols="80">
					                 <?=$veri[0]->hakkimizda?>
					             </textarea>					 
					             <script>
					                 CKEDITOR.replace('editor1');
					             </script>
				             </div>
				             <div class="tab-pane" id="iletisim" >
				                  <h4>İletişim Sayfası Bilgileri</h4>
					             <textarea name="editor2" id="editor2" rows="15" cols="80">
					                 <?=$veri[0]->iletisim?>
					             </textarea>
					             <script>
					                 CKEDITOR.replace('editor2');
					             </script>
				             </div>
							
				             <button type="submit" class="btn btn-danger">Güncelle</button>
				          </div>
						 </form>
				     </div>
		         </div>
		     </div>
	     </div>
     </div>
 </div>
       <!--END PAGE CONTENT -->
</div>
<?php $this->load->view('admin\_footer');?>
 <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/custom.js"></script>
    <script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>