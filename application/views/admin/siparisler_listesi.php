<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Siparişler Listesi</h2>
						<p class="text-success"><?= $this->session->flashdata("mesaj")?></p>					
				     <div class="col-lg-10">
                      <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h3><a href="<?=base_url()?>admin/urunler/ekle"class="btn btn-primary btn-sm"><i class=" icon-plus-sign"></i>Siparis Ekle</a></h3>
                        </div>						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr bgcolor="#093">
                                            <th style="width: 10px">S.No</th>
											<th>Tarih</th>
                                            <th>Adı</th>
                                            <th>Tutar</th>
                                            <th>Şehir</th>
											<th>Durumu</th>
											<th>Detay</th>
                                        </tr>
										<?php
										$no=0;
										foreach ($veriler as $rs)
										{ $no++;
										?>
										<tr>
                                            <td style="width: 10px"><?=$no?></td>
											<td><?=$rs->tarih?></td>
                                            <td><?=$rs->adsoy?></td>
                                            <td><?=$rs->tutar?>TL</td>
                                            <td><?=$rs->sehir?></td>
											<td><?=$rs->siparisdurumu?></td>
											<td>
											 <a href="<?=base_url()?>admin/siparisler/siparisdetay/<?=$rs->id?>" class="btn btn-primary btn-sm btn-xs">Detay</a>
										    </td>
											
										</tr>
										<?php }?>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                </div>
                <hr />
            </div>
        </div>
       <!--END PAGE CONTENT -->
    </div>
    </div>
<?php
		$this->load->view('admin\_footer');?> 