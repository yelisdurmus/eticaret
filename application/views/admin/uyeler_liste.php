<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Üye Listesi</h2>
						<p class="text-success"><?= $this->session->flashdata("mesaj")?></p>					
				     <div class="col-lg-10">
                      <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h3><a href="<?=base_url()?>admin/uyeler/ekle"class="btn btn-primary btn-sm"><i class=" icon-plus-sign"></i>Üye Ekle</a></h3>
                        </div>						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr bgcolor="#093">
                                            <th style="width: 10px">S.No</th>
                                            <th>Adı Soyadı</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
											<th>Şehir</th>
											<th>Yetki</th>
											<th>Durum</th>
											<th>Düzenle</th>
											<th>Sil</th>
                                        </tr>
										<?php
										$no=0;
										foreach ($veriler as $rs)
										{ $no++;
										?>
										<tr>
                                            <td style="width: 10px"><?=$no?></td>
                                            <td><?=$rs->adsoy?></td>
                                            <td><?=$rs->email?></td>
                                            <td><?=$rs->tel?></td>
											<td><?=$rs->sehir?></td>
											<td><?=$rs->yetki?></td>
											<td><?=$rs->durum?></td>
											<td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->id?>" class="btn btn-primary btn-sm btn-flat"><i class="icon-edit"></i>Düzenle</a></td>
											<td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->id?>"onclick="return confirm('Silinecek Emin misin?')" class="btn btn-danger btn-sm"><i class="icon-remove"></i> Sil</a></td>
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
<?php
		$this->load->view('admin\_footer');
?> 