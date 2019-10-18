
        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
             
                    <img src="<?=base_url()?>/uploads/<?=$this->session->admin_session["resim"]?>" class="media-object img-thumbnail user-img" alt="User İmage"/>
				
                <br/>
                <div class="media-body">
                    <h5 class="media-heading"></h5>
                    <ul class="list-unstyled user-info">
                        <li><?=$this->session->admin_session["adsoy"]?><br/>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                        </li> 
                    </ul>
                </div>
                <br/>
       </div>
            <ul id="menu" class="collapse">
			<li> <span class="label label-default">ANA MENU</span></li>
                <li class="panel"><a href="<?=base_url()?>admin"><i class="icon-dashboard"></i><span> Anasayfa </span> </a></li>
				<li class="panel"><a href="<?=base_url()?>admin/uyeler"><i class="icon-user"></i><span> Üyeler </span></a></li>
				<li class="panel"><a href="<?=base_url()?>admin/urunler"><i class="icon-star"></i><span> Ürünler </span></a></li>
                <li class="pane">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-truck"> </i><span> Siparişler </span>   
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="<?=base_url()?>admin/siparisler/liste/yeni"><i class="icon-angle-right"></i> Yeni </a></li>
                        <li class=""><a href="<?=base_url()?>admin/siparisler/liste/onaylandi"><i class="icon-angle-right"></i> Onaylananlar </a></li>
						<li class=""><a href="<?=base_url()?>admin/siparisler/liste/iptal"><i class="icon-angle-right"></i> İptal Edilenler </a></li>
                        <li class=""><a href="<?=base_url()?>admin/siparisler/liste/kargoda"><i class="icon-angle-right"></i> Kargodakiler </a></li>
                        <li class=""><a href="<?=base_url()?>admin/siparisler/liste/tamamlandi"><i class="icon-angle-right"></i> Tamamlananlar </a></li>
                    </ul>
			    </li>
			<li><span class="label label-default">GENEL</span></li>
				    <li><a href="<?=base_url()?>/admin/home/ayarlar"><i class="icon-github-alt"></i> Ayarlar  </a></li>
                    <li><a href="<?=base_url()?>admin/uyeler/admin_liste"><i class="icon-github-alt"></i> Adminler  </a></li>
                    <li><a href="#"><i class="icon-github-alt"></i> Information  </a></li>
			</ul>
        </div>
        <!--END MENU SECTION -->