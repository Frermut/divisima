<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=WWW?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?=WWW?>/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?=WWW?>/css/flaticon.css"/>
	<link rel="stylesheet" href="<?=WWW?>/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?=WWW?>/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="<?=WWW?>/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?=WWW?>/css/animate.css"/>
	<link rel="stylesheet" href="<?=WWW?>/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>

					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>

					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							

						<?php if (!$_SESSION['auth_user']) : ?>
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="/sign-in">Sign In </a> or <a href="/sign-up">Create Account</a>
							</div>
						<?php else : ?>
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="?action=logout">Log Out</a></a>
								&emsp;
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span id="cart-count"><?=$data['count']?></span>
								</div>
								<a href="/cart">Shopping Cart</a>
							</div>
						<?php endif; ?>	

						</div>
					</div>

				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="/">Home</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Jewelry
						<span class="new">New</span>
					</a></li>
					<li><a href="#">Shoes</a>
						<ul class="sub-menu">
							<li><a href="#">Sneakers</a></li>
							<li><a href="#">Sandals</a></li>
							<li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li>
						</ul>
					</li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Product Page</a></li>
							<li><a href="./category.html">Category Page</a></li>
							<li><a href="./cart.html">Cart Page</a></li>
							<li><a href="./checkout.html">Checkout Page</a></li>
							<li><a href="./contact.html">Contact Page</a></li>
						</ul>
					</li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
		</nav>
	</header>


