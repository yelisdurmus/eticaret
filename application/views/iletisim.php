<?php
        $this->load->view('_header');?>
<?php
        $this->load->view('_sidebar');?>

                <div class="col-sm-9 padding-right">
	    			<div class="contact-info">
	    				<h2 class="title text-center">İletişim Bilgileri</h2>
	    				<address>
	    					<p>
							<?=$veri[0]->iletisim?>
							</p>
						</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Ağlar</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
                </div>
			</div>
		</div>
    </section>
		
<?php
        $this->load->view('_footer');
?>