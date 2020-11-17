	
	<div class="col-lg-12 col-12">
		<div class="menu-area">
			<!-- Main Menu -->
			<nav class="navbar navbar-expand-lg">
				<div class="navbar-collapse">	
					<div class="nav-inner">	
						<ul class="nav main-menu menu navbar-nav">
								<li class="active"><a href="{{route('mainpage')}}">Home</a></li>
								<li><a href="#">Product <i class="ti-angle-down"></i><i class="ti-angle-down"></i></a>

								@foreach ($categories as $category)
								<ul class="dropdown">
									<li><a href="blog-single-sidebar.html">
										{{$category->name}}</a>
									</li>
								</ul>
								@endforeach

									@foreach ($categories as $category)
										<option>
											{{$category->name}}
										</option>
									@endforeach

								<li><a href="#">Brands</a></li>
								{{-- <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
									<ul class="dropdown">
										<li><a href="shop-grid.html">Shop Grid</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li> --}}
								{{-- <li><a href="#">Pages</a></li>									 --}}
								<li><a href="#">Blog</a>
									{{-- <ul class="dropdown">
										<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
									</ul> --}}
								</li>
								<li><a href="{{route('contact')}}">Contact Us</a></li>
							</ul>
					</div>
				</div>
			</nav>
			<!--/ End Main Menu -->	
		</div>
	</div>