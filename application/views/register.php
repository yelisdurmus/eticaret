<?php
        $this->load->view('_header');?>
		<section class="header_text sub">
			  <h4><span><?=$sayfa?></span></h4>
			</section>	
<?php   $this->load->view('_sidebar');
?>
<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Formu</span></h4>
						<form action="#" method="post" action="<?=base_url()?>home/login">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Eposta</label>
									<div class="controls">
										<input type="email" placeholder="E-mail adresini giriniz" id="inputEmail" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifre</label>
									<div class="controls">
										<input type="password" placeholder="Şifrenizi giriniz" id="inputPassword" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Hesabınıza giriş yapın">
									<hr>
									<p class="reset">Kurtarın <a tabindex="4" href="#" title="Recover your username or password">epostanızı ya da şifrenizi</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Kayıt</strong> Formu</span></h4>
						<form action="<?=base_url?>home/login" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Eposta</label>
									<div class="controls">
										<input type="email" placeholder="E-mail adresini giriniz" class="input-xlarge">
									</div>
								</div>								
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" placeholder="Şifrenizi giriniz" class="input-xlarge">
									</div>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Hesabınızı oluşturun"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>
<?php
        $this->load->view('_footer');
?>