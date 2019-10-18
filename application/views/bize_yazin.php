<?php
 $this->load->view('_header');?>
<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center"><strong><?=$sayfa?></strong></h2>    			    				    				
				</div>			 		
			</div>
			<?php if ($this->session->flashdata("mesaj")) {?>
				<div class="form-group col-md-6">
					<p><?=$this->session->flashdata("mesaj")?></p>
				</div>
			<?php }?>
			<script>
			 function validateForm(){
				 var x = document.forms["myform"]["adsoy"].value;
				 if(x=="") {
					 alert("Adsoy alanı dolu olmalı");
					 return false;
				 }
			 }
			</script>
			
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Bİze İletmek İstediklerinizi Yazınız</h2><div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="myform" onsubmit="return validateForm()" method="post" action="<?=base_url()?>home/mesaj_kaydet">
				            <div class="form-group col-md-6">
				                <input type="text" name="adsoy" class="form-control" required="required" placeholder="Adınız Soyadınız">
				            </div>
							<div class="form-group col-md-6">
				                <input type="text" name="tel" class="form-control" required="required" placeholder="Telefon Numarası">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="eposta" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" id="message" required="required" class="form-control" rows="8" placeholder="Mesajınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submitAccount" class="btn btn-primary pull-right" value="Mesajı Gönder">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    	</div>    			
	    </div>	
    </div>
			
<?php
        $this->load->view('_footer');
?>