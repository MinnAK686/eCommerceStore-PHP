<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?= BASE_URL ?>/views/assets/clients/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">

	<!-- Base URL -->
	<base href="/">

	<!-- Site Title -->
	<title>eCommerceShop</title>

	<!--
            CSS
            ============================================= -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/views/assets/clients/css/linearicons.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/views/assets/clients/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/views/assets/clients/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/views/assets/clients/css/themify-icons.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/views/assets/clients/css/nice-select.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/views/assets/clients/css/nouislider.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/views/assets/clients/css/bootstrap.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/views/assets/clients/css/main.css">
</head>

<body id="category">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/">
						<h4>AP Shopping<h4>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<a href="products/cart" class="cart">
									<span class="ti-bag"></span>
								</a>
							</li>
							<li class="nav-item">
								<button class="search">
									<span class="lnr lnr-magnifier" id="search"></span>
								</button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<?php if(Request::URI() === "") : ?>
						<h1>Welcome</h1>
					<?php elseif (Request::URI() === "products/cart") : ?>
						<h1>Shopping Cart</h1>
					<?php elseif (Request::URI() === "products/checkout") : ?>
						<h1>Checkout</h1>
					<?php elseif (Request::URI() === "products/detail") : ?>
						<h1>Welcome</h1>
					<?php else : ?>
						<h1>404 Page Not Found</h1>
					<?php endif ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	