<!-- EKISPICE SHOPPING SITE -->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Ekispice</title>
	<!-- META TAGS FOR SEO -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Ekispice" />
	<!-- END OF META TAG -->
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="<?php echo(base_url()); ?>assets/css/mycustom.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo(base_url()); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo(base_url()); ?>assets/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo(base_url()); ?>assets/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo(base_url()); ?>assets/css/shop.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo(base_url()); ?>assets/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo(base_url()); ?>assets/css/owl.theme.css" type="text/css" media="all">
	<link href="<?php echo(base_url()); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo(base_url()); ?>assets/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row" align="center">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<!-- <h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">08139589689</li>
					</ul> -->
					<img src="<?php echo(base_url()); ?>assets/images/logo.png">
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts" >
						<a class="navbar-brand" href="index.html" >
							EREHKA SPICE
						</a>
						<a class="navbar-brand" href="index.html" >
							CLOTHING
						</a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>

									<div class="form-group">
										<a href="google.com">
											<label class="mb-2 forgotPass">Fogot Password?</label>
										</a>
									</div>

									<div class="form-group button-log1">
										<a href="#" class="btn-open1 overlay-close1">
											<label class="regnow">Don't have an account? REGISTER</label>
										</a>
									</div>
										<!-- /check box for only God knows what -->
									<!-- <div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div> -->
										<!-- //check box for only God knows what -->
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

								</form>
							</div>
							<!---->
						</div>
					</div>
					<!---->
					<!-- /for registration -->
					<div class="overlay-login1 text-left">
						<button type="button" class="overlay-close2">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Register Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">First Name</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Last Name</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Phone Number</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Re-enter Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>

									<div class="form-group button-log">
										<a href="#" class="btn-open overlay-close2">
											<label class="loginB">Already have an account? LOGIN</label>
										</a>
									</div>
										<!-- /check box for only God knows what -->
									<!-- <div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div> -->
										<!-- //check box for only God knows what -->
									<button type="submit" class="btn btn-primary submit mb-4">Submit</button>

								</form>
							</div>
							<!---->
						</div>
					</div>		
					<!-- //for registration -->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li> -->

							<!-- Features commented out -->
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Features
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.html"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.html">Prescription Glasses</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="customer.html">Customers</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="<?php echo(base_url()); ?>assets/images/g2.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="<?php echo(base_url()); ?>assets/images/g3.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li> -->
							<!-- // Features commented out -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-6 media-list span6 text-center padpush">
											<h5 class="tittle-w3layouts-sub"> ESF </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.html"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.html">Prescription Glasses</a>
												</li>
												<li>
													<a href="shop.html">Rx Sunglasses</a>
												</li>
												<li>
													<a href="shop.html">Contact Lenses</a>
												</li>
												<li>
													<a href="shop.html">Multifocal Glasses</a>
												</li>
												<li>
													<a href="shop.html">Kids Glasses</a>
												</li>
												<li>
													<a href="shop.html">Lightweight Glasses</a>
												</li>
												<li>
													<a href="shop.html">Sports Glasses</a>
												</li>
											</ul>
										</div>
										<div class="col-md-6 media-list span6 text-center padpush">
											<h5 class="tittle-w3layouts-sub"> ESC </h5>
											<ul>
												<li class="media-mini mt-3">

													<a href="shop.html">Brooks Brothers</a>
												</li>
												<li>
													<a href="shop.html">Persol</a>
												</li>
												<li>
													<a href="shop.html">Polo Ralph Lauren</a>
												</li>
												<li>
													<a href="shop.html">Prada</a>
												</li>
												<li>
													<a href="shop.html">Ray-Ban Jr</a>
												</li>
												<li>
													<a href="shop.html">Sferoflex</a>
												</li>
												<li>
													<a href="shop.html">Polo Ralph Lauren</a>
												</li>
												<li>
													<a href="shop.html">Prada</a>
												</li>
												<li>
													<a href="shop.html">Ray-Ban Jr</a>
												</li>
											</ul>
											<!-- <ul class="sub-in text-left"> -->

											<!-- </ul> -->
										</div>

											<!-- /Third division Title Goes here -->
										<!-- <div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="<?php echo(base_url()); ?>assets/images/g1.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div> -->
											<!-- /Third division Title Goes here -->

									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
					</ul>
               
				</div>
			</nav>
		</header>
		<!-- //header