<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('../frontend_asset/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('../frontend_asset/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('../frontend_asset/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('../frontend_asset/style.css')}}">
    <link rel="stylesheet" href="{{asset('../frontend_asset/css/responsive.css')}}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> 01 505050</li>
								<li><i class="ti-email"></i> info@asiamobile.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Store location</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a>


								@auth
								<li class="nav-item dropdown">
					              <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					                  {{ Auth::user()->name }}
					              </a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					                  <a class="dropdown-item text-dark" href="{{ route('logout') }}"
					                     onclick="event.preventDefault();
					                                   document.getElementById('logout-form').submit();">
					                      {{ __('Logout') }}
					                  </a>

					                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					                      @csrf
					                  </form>
					              </div>

								</li>

								

								@else

								<li>{{-- <i class="ti-user"></i> --}} <a href="{{route('signinpage')}}">Sign In</a></li>
								<li>{{-- <i class="ti-user"></i> --}} <a href="{{route('signuppage')}}">Sign Up</a></li>
								{{-- <li><i class="ti-power-off"></i><a href="{{route('signinpage')}}">Login</a></li> --}}

								@endauth

							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="{{asset('../frontend_asset/images/top_logo.png')}}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form" action="{{route('search')}}" method="GET">
									@csrf
									<input type="text" placeholder="Search here..." name="query" value="{{ request()->input('query') }}" id="query">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="search-bar-top">
							<div class="search-bar">						
								<form action="{{route('search')}}" method="GET">
									<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								{{-- <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a> --}}
							</div>
							<div class="sinlge-bar shopping">
								<a href="{{route('cartpage')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count" id="cart">0</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">

{{-- @include('frontend.navbar-category') --}}

						<div class="col-lg-12 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="{{route('mainpage')}}">Home</a></li>
													<li class="myul"><a href="#">Product<i class="ti-angle-down"></i></a>

														<ul class="main-category main-dropdown">
															@foreach ($data[0] as $category)
															<li><a href="#">{{$category->name}} <i class="fa fa-angle-right" aria-hidden="true"></i></a>
																<ul class="sub-category sub-drodown">
																	@foreach($category->subcategories as $subcategory)
																	<li><a href="{{route('itemsbysubcategory',$subcategory->id)}}">{{$subcategory->name}}</a></li>
																	@endforeach
																</ul>
															</li>
															@endforeach
														</ul>

													{{-- <ul class="dropdown main-category">
													  @foreach ($data[0] as $category)
														<li><a href="#">
															{{$category->name}}</a>
															<i class="fa fa-angle-right" aria-hidden="true"></i>
														</li>
															
															@foreach($category->subcategories as $subcategory)
															<ul class="">
													        <li class="nav-item ">
													          <a class="btn btn-link subcategory" href="{{route('itemsbysubcategory',$subcategory->id)}}" data-id="{{$subcategory->id}}">{{$subcategory->name}}</a>
													        </li>
													    	</ul>
													        @endforeach

													  @endforeach
													</ul> --}}

													

														

													<li><a href="{{route('brandpage')}}">Brands</a></li>
													
													{{-- <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="shop-grid.html">Shop Grid</a></li>
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li> --}}									
													<li><a href="{{route('blogpage')}}">Blog</a>
														{{-- <ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul> --}}
													</li>

													@role('customer')
													<li><a href="{{route('reviews')}}">Your Feedback</a></li>
													@else
													@endrole

													<li><a href="{{route('contact')}}">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	

@yield('content')
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="{{asset('../frontend_asset/images/top_logo.png')}}" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:01505050">01 505050</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - Shwe Laung Street,</li>
									<li>Sanchaung Township, Yangon, Myanmar.</li>
									<li>info@asiamobile.com</li>
									<li>+01 505050</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.asiamobile.com" target="_blank">Asia Mobile Store</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								{{-- <img src="{{asset('../frontend_asset/images/payments.png')}}" alt="#"> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{asset('../frontend_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('../frontend_asset/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('../frontend_asset/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('../frontend_asset/js/popper.min.js')}}"></script>
	<script src="{{asset('../frontend_asset/js/popper.min.js.map')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('../frontend_asset/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	{{-- <script src="{{asset('../frontend_asset/js/colors.js')}}"></script> --}}
	<!-- Slicknav JS -->
	<script src="{{asset('../frontend_asset/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('../frontend_asset/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('../frontend_asset/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('../frontend_asset/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('../frontend_asset/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('../frontend_asset/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('../frontend_asset/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('../frontend_asset/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('../frontend_asset/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('../frontend_asset/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('../frontend_asset/js/active.js')}}"></script>


@yield('script')


<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>
</html>


