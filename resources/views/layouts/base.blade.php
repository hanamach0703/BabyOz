<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>BabyOz | {{ $title }}</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    @livewireStyles

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="{{ asset('assets/img/logo.png') }}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="{{ ($title === "Home") ? 'current-list-item' : '' }}"><a href="/">Home</a></li>
								<li class="{{ ($title === "About") ? 'current-list-item' : '' }}"><a href="/about">About</a></li>
								<li class="{{ ($title === "Join Us") ? 'current-list-item' : '' }}"><a href="/joinus">Join Us</a></li>
								<li class="{{ ($title === "Contact") ? 'current-list-item' : '' }}"><a href="/contact">Contact</a></li>
								<li class="{{ ($title === "Shop") ? 'current-list-item' : '' }}"><a href="/shop">Shop</a></li>
								
								@if (Route::has('login'))
									@auth
										@if (Auth::user()->utype === 'ADM')
											<li class="menu-item menu-item-has-children-parent">
												<a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency">
													<li class="menu-item">
														<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
													</li>
													<form id="logout-form" method="POST" action="{{ route('logout') }}">
														@csrf
													</form>
												</ul>
											</li>
										@else
											<li>
												<div class="header-icons">
													<a class="shopping-cart" href="{{ route('product.cart') }}"><i class="fas fa-shopping-cart"></i></a>
													<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
													<a class="profile" href="#"><i class="fas fa-user"> ({{ Auth::user()->name }})</i></a>
													<ul class="sub-menu">
														<li><a href="#">Profile</a></li>
														<li><a href="#">History order</a></li>
														<li>
															<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
														</li>
														<form id="logout-form" method="POST" action="{{ route('logout') }}">
															@csrf
														</form>
													  </ul>
												</div>
											</li>
										@endif
								@else
									<li>
										<div class="header-icons">
											<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
											<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
											<a class="bordered-btn mr-2" href="{{ route('login') }}">Login</a>
											<a class="boxed-btn" href="{{ route('register') }}">Register</a>
										</div>
									</li>
								@endif
								@endif
							</ul>
						</nav>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

    {{ $slot }}

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Information</h2>
						<ul>
							<li><b>Address</b></li>
							<li>Store & Office</li>
							<li>Jl. Kaliurang Km. 10, Sleman,</li>
							<li>Daerah Istimewa Yogyakarta,</li>
							<li>Indonesia</li>
							<li><b>Official Hour</b></li>
							<li>Monday - Friday</li>
							<li>08.00 - 16.00</li>
							<li>Saturday</li>
							<li>08.00 - 14.00</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>089-90708090</li>
							<li>info@baby-oz.co.id</li>
							<div class="social-icons">
								<ul>
									<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
								</ul>
							</div>	
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box useful Link">
						<h2 class="widget-title">Useful Link</h2>
						<ul>
							<li>Other & Shipping</li>
							<li>Gift Card Balance</li>
							<li>Terms</li>
							<li>FAQ</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- jquery -->
	<script src="{{  asset('assets/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{  asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{  asset('assets/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{  asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{  asset('assets/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{  asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{  asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{  asset('assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{  asset('assets/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{  asset('assets/js/main.js') }}"></script>

    @livewireScripts

</body>
</html>