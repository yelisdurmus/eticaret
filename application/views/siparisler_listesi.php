
      <!--main content start-->
	  <?php
	  $this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		?>
      <section id="main-content">
          <section class="wrapper site-min-height">
		  
		  <ol class="breadcrumb">
		  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		  <li><a href="#">Siparişler</a></li>
		  <i class="active">Sipariş Listesi</li>
		  </ol>
		  
		  
		  <a href="<?=base_url()?>" class=" btn-success btn-xs fa fa-plus-square"><b>Sipariş Ekle</b></a>
		  
			
			
                <div class="row mt">
                  <div class="col-md-15">
                      <div class="content-panel">
                         <h3 class="box-title">Sipariş Listesi </h3>
						 </div>
						 
						 <div class="box-body">
						   <table class="table table-bordered">
						      <tr>
							      <th style="width: 10px">Nr</th>
								  
                                  <th> Date</th>
								  <th>Adı</th>
								  <th>Tutar</th>
								  <th>Şehir</th>
								  <th>Durumu</th>
								  <th>Detay</th>
								  
                              </tr>
                              
							  <?php
							  $rn=0;
							  foreach($veriler as $rs)
							  {  $rn++;
							  ?>
                                <tr>
                                  <td style="width: 10px"><?=$rn?></td>
                                  <td> <?=$rs->tarih?></td>
                                  <td> <?=$rs->adsoy?></td>
                                  <td> <?=$rs->tutar ?>TL</td>
								  <td><?=$rs->sehir ?></td>
								  <td><?=$rs->siparisdurumu ?></td>
								   <td><a href="<?=base_url()?>Siparisler/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-success btn-xs"><i class="fa fa-remove"></i>Detay</a></td>
								   </tr>
								   
							  <?php } ?>
							  
                              
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  <?php
	  $this->load->view('admin\_footer');
	
		?>