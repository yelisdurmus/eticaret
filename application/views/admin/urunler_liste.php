<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Ürün Listesi</h2>
						<p class="text-success"><?= $this->session->flashdata("mesaj")?></p>					
				     <div class="col-lg-10">
                      <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h3><a href="<?=base_url()?>admin/urunler/ekle"class="btn btn-primary btn-sm"><i class=" icon-plus-sign"></i>Ürün Ekle</a></h3>
                        </div>						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr bgcolor="#093">
                                            <th style="width: 10px">S.No</th>
                                            <th>Adı</th>
                                            <th>Kategori</th>
                                            <th>Alış Fiyatı</th>
											<th>Satış Fiyatı</th>
											<th>Resim</th>
											<th>Galeri</th>
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
                                            <td><?=$rs->adi?></td>
                                            <td><?=$rs->katadi?></td>
                                            <td><?=$rs->afiyat?></td>
											<td><?=$rs->sfiyat?></td>
											<td>
											<?php  if ($rs->resim) { ?>
											<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->id?>">
											<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="30"></a>
											<?php } else {?>
											   <a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->id?>" class="btn btn-primary btn-sm btn-flat">Resim Ekle</a>
										    <?php }?>
											
											</td>
											<td><a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->id?>" class="btn btn-primary btn-sm btn-flat">Galeri Yükle</a></td>
											<td><?=$rs->durum?></td>
											<td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->id?>" class="btn btn-primary btn-sm btn-flat"><i class="icon-edit"></i>Düzenle</a></td>
											<td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->id?>"onclick="return confirm('Silinecek Emin misin?')" class="btn btn-danger btn-sm"><i class="icon-remove"></i> Sil</a></td>
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