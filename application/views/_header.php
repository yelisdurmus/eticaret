<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?=$veri[0]->description?>">
	<meta name="keywords" content="<?=$veri[0]->keywords?>">
    <meta name="author" content="">
    <title><?=$sayfa?> | <?=$veri[0]->adi?></title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0850 222 55 99</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> drmselektronik@hotmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="" alt="" /></a>
						</div>
					
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a  href="<?=base_url()?>uye"><i class="fa fa-user"></i> Profil</a></li>
								<li><a  href="<?=base_url()?>uye/siparisler"><i class="fa fa-crosshairs"></i>Siparişlerim</a></li>
								<li><a  href="<?=base_url()?>uye/sepetim"><i class="fa fa-shopping-cart"></i> Sepet <span></span></a></li>
								<li><a  href="<?=base_url()?>home/login_ol"><i class="fa fa-lock"></i> Login</a></li>
								<li><a  href="<?=base_url()?>home/login_cik"><i class="fa fa-star"></i> Çıkış</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<?php
						$anasayfa=null;
						$hakkimizda=null;
						$iletisim=null;
						$bize_yazin=null;
						$kategoriler=null;
						$kampanyalar=null;
						if ($menu=="anasayfa")
							$anasayfa="active";
						if ($menu=="hakkimizda")
							$hakkimizda="active";
						if ($menu=="iletisim")
							$iletisim="active";
						if ($menu=="bize_yazin")
							$bize_yazin="active";
						if ($menu=="kategoriler")
							$kategoriler="active";
						if ($menu=="kampanyalar")
							$kampanyalar="active";
						?>
						    <li class="<?=$anasayfa?>"><a href="<?=base_url()?>">Anasayfa</a></li>
							<li class="<?=$hakkimizda?>"><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
							<li class="<?=$iletisim?>"><a href="<?=base_url()?>home/iletisim">İletişim</a></li>	
                            <li class="" ><a href="#">Kategoriler<i class="fa fa-angle-down"></i></a>
							    <ul  role="menu" class="sub-menu">
								<li class="" ><a href="<?=base_url()?>Home/telefon/">Telefon & Aksesuar<i class="fa fa-angle"></i></a>
								<li class="" ><a href="<?=base_url()?>Home/bilgisayar/">Bilgisayar<i class="fa fa-angle"></i></a>
								<li class="" ><a href="<?=base_url()?>Home/televizyon/">Televizyon<i class="fa fa-angle"></i></a>
								<li class="" ><a href="<?=base_url()?>Home/fotograf/">Fotograf & Kamera <i class="fa fa-angle"></i></a>
								</ul>
								</li>
							<li class="<?=$bize_yazin?>"><a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a></li>	
						
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->