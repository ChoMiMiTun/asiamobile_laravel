@extends('frontend/frontendtemplate')

@section('title', 'Item Detail')

@section('content')

	<!-- Product Style -->
	<section class="product-area shop-sidebar shop section">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-4 col-12">

					<div class="shop-sidebar">
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Categories</h3>
								<ul class="categor-list">
									{{-- <li><a href="#">T-shirts</a></li> --}}

									@foreach($data[0] as $category)
										<li><a href="#">{{$category->name}}</a></li>
									@endforeach
								</ul>
							</div>
							<!--/ End Single Widget -->
					</div>

					<div class="shop-sidebar">
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Brands</h3>
								<ul class="categor-list">
									{{-- <li><a href="#">T-shirts</a></li> --}}

									@foreach($data[2] as $brand)
										<li><a href="{{route('itemsbybrand',$brand->id)}}">{{$brand->name}}</a></li>
									@endforeach
								</ul>
							</div>
							<!--/ End Single Widget -->
					</div>
				</div>
				
				<div class="col-lg-9 col-md-8 col-12">
					<div class="row">
						<div class="col-12">
							<!-- Shop Top -->
							<div class="shop-top">
								<div class="shop-shorter">
									<div class="single-shorter">
										<label>Show :</label>
										<select>
											<option selected="selected">09</option>
											<option>15</option>
											<option>25</option>
											<option>30</option>
										</select>
									</div>
									<div class="single-shorter">
										<label>Sort By :</label>
										<select>
											<option selected="selected">Name</option>
											<option>Price</option>
											<option>Size</option>
										</select>
									</div>
								</div>
								{{-- <ul class="view-mode">
									<li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
									<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
								</ul> --}}
							</div>
							<!--/ End Shop Top -->
						</div>
					</div>
					<div class="row">

						@foreach($mybrand->items as $item)
							<div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
									<div class="product-img">
										<a href="{{route('itemdetail', $item->id)}}">
											<img class="default-img" src="{{asset($item->photo)}}" alt="#">
											<img class="hover-img" src="{{asset($item->photo)}}" alt="#">
										</a>
										<div class="button-head">
											<div class="product-action">
												<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
												<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
												<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
											</div>
											<div class="product-action-2">
												<a title="Add to cart" href="#">Add to cart</a>
											</div>
										</div>
									</div>
									<div class="product-content">
										<h3><a href="{{route('itemdetail', $item->id)}}">{{$item->name}}</a></h3>
										<div class="product-price">
											<span>{{$item->price}} MMK</span>
										</div>
									</div>
								</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Product Style 1  -->	

@endsection