<?php
        $this->load->view('_header');?>

    <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
				     <?php if ($this->session->flashdata("mesaj")) {?>
							<div class="signup-form">
							    <p><?=$this->session->flashdata("mesaj")?></p>
							</div>
					 <?php }?>
					<div class="login-form"><!--login form-->
						<h2>Hesabınızda Oturum Açın</h2>
						<form method="post" action="<?=base_url()?>home/login">
						    <input type="email" name="eposta" placeholder="Email Addresinizi Giriniz"/>
							<input type="password" name="sifre" placeholder="Şifrenizi Giriniz"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Beni Hatırla
							</span>
							<button type="submit" class="btn btn-default">Oturum Aç</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Veya</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Yeni Hesap Aç</h2>
						<form action="<?=base_url()?>Home/ekle_kaydet">
							<input type="text" name="adsoy" placeholder="Adınız Soyadınız"/>
							<input type="email" name="eposta" placeholder="Email Addresinizi Giriniz"/>
							<input type="password" name="sifre" placeholder="Şifrenizi Giriniz"/>
							<button type="submit" class="btn btn-default">Kaydol</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php
        $this->load->view('_footer');
?>