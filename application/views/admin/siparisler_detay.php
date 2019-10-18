<?php
		$this->load->view('admin\_header');
	    $this->load->view('admin\_sidebar');
?> 
<div>   <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">

						<p class="text-success"><?= $this->session->flashdata("mesaj")?></p>					
				     <div class="col-lg-10">
                      <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h3><a href="<?=base_url()?>admin/siparisler"class="btn btn-primary btn-sm"><i class=" icon-plus-sign"></i>Siparis Ekle</a></h3>
                        </div>						
                        <div class="panel-body">
                            <div class="table-responsive">
				
                <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
						    <td class="date">Nr</td>
						    <td class="date">Tarih</td>
							<td class="name">Adı</td>
							<td class="total">Tutar</td>
							<td class="quantity">Şehir</td>
							<td class="description">Durum</td>
							<td class="description">Detay</td>
							<td></td>
						</tr>
					</thead>
			<?php
					$rn=0;
					$toplam=0;
					foreach ($veriler as $rs)
					{ $rn++;
					$toplam+=$rs->tutar;
					?>
					<tbody>
						<tr>
						    <td><?=$rn?></td>
							<td><?=$rs->tarih?></td>
							<td><?=$rs->adsoy?></td>
							<td><?=$rs->tutar?>TL</td>
							<td><?=$rs->sehir?></td>
							<td><?=$rs->siparisdurumu?></td>
							<td>
								<a href="" onclick="return confirm('İptal Edilecek Emin misin?')" class="cart_quantity_delete">
								<i class="fa fa-times">İptal</i></a>
							</td>
						</tr>	
					</tbody>
					<?php
					}
					?>
				</table>
					<br>
					Sipariş Toplamı : <?=$toplam?> TL
	                </br>
					
				<form method="post" action="<?=base_url()?>admin/siparisler/guncelle/<?=$siparisid?>">
					 Kargo Bilgileri :<input class="form-control" type="text" value="<?=$rs->kargo?>" name="kargo"><br>
					 İşlem:
					  <select name="siparisdurumu" class="form-control">
					    <option><?=$rs->siparisdurumu?></option>
					    <option>onaylandi</option>
						<option>iptal</option>
						<option>kargoda</option>
						<option>tamamlandi</option>
					  </select><br>
					  Açıklama:
					  <textarea class="form-control" name="aciklama" rows=5 cols=100><?=$rs->aciklama?></textarea><br>
				     <button class="btn btn-default update" type="submit" value="" >Güncelle</button>
				</form>
				
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