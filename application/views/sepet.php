<?php
$this->load->view('_header');
?>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Sepetim</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Ürün</td>
							<td class="description"> </td>
							<td class="price">Fiyat</td>
							<td class="quantity">Adet</td>
							<td class="total">Tutar</td>
							<td class="description">Sil</td>
							<td></td>
						</tr>
					</thead>
					<?php
					$rn=0;
					$toplam=0;
					foreach ($veriler as $rs)
					{ $rn++;
					$tutar=$rs->satfiyat * $rs->adet;
					$toplam+=$tutar;
					?>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href="<?=base_url()?>home/urundetay/<?=$rs->urun_id?>" ><img src="<?=base_url()?>uploads/<?=$rs->urunresim?>" width="100" height="100"alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$rs->urunadi?></a></h4>
								<p></p>
							</td>
							<td class="cart_price">
								<p><?=$rs->satfiyat?>TL</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?=$rs->adet?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?=$rs->satfiyat * $rs->adet?>TL</p>
							</td>
							<td class="cart_delete">
								<a href="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>" onclick="return confirm('Silinecek Emin misin?')" class="cart_quantity_delete"><i class="fa fa-times">Sil</i></a>
							</td>
						</tr>
						<?php
					}
					?>
					</tbody>
				</table>
			</div>	
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<a class="btn btn-default update" type="submit" >Toplam :<?=$toplam?></a>
						<form method="post" action="<?=base_url()?>uye/satinal">
						  <input type="hidden" name="toplam" value="<?=$toplam?>">
				          <button class="btn btn-default update" type="submit" value="" >Satınal</button>
					   </form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	


<?php
$this->load->view('_footer');
?>