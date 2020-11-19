						

		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									@foreach ($data[0] as $category)
									<li><a href="#">{{$category->name}}<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($category->subcategories as $subcategory)
											<li><a href="{{route('itemsbysubcategory',$subcategory->id)}}">{{$subcategory->name}}</a></li>
											@endforeach
										</ul>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-9">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="{{route('mainpage')}}">Home</a></li>
													
													{{-- <li class="myul"><a href="#">Product<i class="ti-angle-down"></i></a> --}}

														{{-- <ul class="main-category main-dropdown">
															@foreach ($data[0] as $category)
															<li><a href="#">{{$category->name}} <i class="fa fa-angle-right" aria-hidden="true"></i></a>
																<ul class="sub-category sub-drodown">
																	@foreach($category->subcategories as $subcategory)
																	<li><a href="{{route('itemsbysubcategory',$subcategory->id)}}">{{$subcategory->name}}</a></li>
																	@endforeach
																</ul>
															</li>
															@endforeach
														</ul> --}}

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