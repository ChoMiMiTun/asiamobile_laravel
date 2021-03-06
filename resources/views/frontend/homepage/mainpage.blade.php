@extends('frontend/frontendtemplate')

@section('title', 'Welcome Asia Mobile Store')

@section('content')



	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

	  <ol class="carousel-indicators">
	   @foreach( $slides as $slide )
	      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
	   @endforeach
	  </ol>

	  <div class="carousel-inner" role="listbox">
	    @foreach( $slides as $slide )
	       <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
	           <img class="d-block img-fluid" src="{{asset($slide->photo)}}" alt="">
	              <div class="carousel-caption d-none d-md-block">
	                 {{-- <h3>{{ $slide->title }}</h3> --}}
	                 <p>{!!$slide->description!!}</p>
	              </div>
	       </div>
	    @endforeach
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	
{{-- @include('frontend.home-trendingitem') --}}
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>

            	<div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->

						@foreach($items as $item)
							{{-- @if($item->status == 1) --}}
								<div class="single-product">
								<div class="product-img">
									<a href="{{route('itemdetail', $item->id)}}">
										<img class="default-img" src="{{asset($item->photo)}}" alt="#">
										<img class="hover-img" src="{{asset($item->photo)}}" alt="#">
										
										@if($item->discount)
											<span class="out-of-stock">Discount</span>
										@endif

									</a>
									<div class="button-head">
										<div class="product-action">
											<a {{-- data-toggle="modal" data-target="#exampleModal" --}} title="" href="#"><i class=" ti-eye"></i>
												@if($item->status == 1)
												<span>In Stock</span>
												@else
												<span>Out of Stock</span>
												@endif
											</a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" class="addtocartBtn text-decoration-none btn btn-warning" data-photo="{{$item->photo}}" data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-sku="{{$item->sku}}" data-discount="{{$item->discount}}">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="{{route('itemdetail', $item->id)}}">{{$item->name}}</a></h3>
									<div class="product-price">
										{{-- <span class="old">$60.00</span> --}}
										{{-- <span>{{$item->price}}</span> Ks --}}

										@if($item->discount)
										<span>{{number_format($item->discount)}} Ks</span>
										<del>{{number_format($item->price)}} Ks</del>
										@else
										<span>{{number_format($item->price)}} Ks</span>
										@endif

									</div>
								</div>
							</div>
							{{-- @endif --}}
						@endforeach

						<!-- End Single Product -->
						
                    </div>
                </div>
            </div>

        </div>
    </div>
	<!-- End Most Popular Area -->

		<!-- Start Discount Item -->
	{{-- <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Discount Item</h2>
					</div>
				</div>
            </div>

            --}}

        </div>
    </div>
	<!-- End Discount Item Area -->
	
	
@include('frontend.homepage.home-blog')

@include('frontend.homepage.home-review')
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
{{-- 	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Shop Newsletter -->

	     {{-- Show Brands --}}
	    <section>
	    	<div class="container">
	    		<div class="row my-3">
			      <div class="col-md-12">
			        {{-- <h3 class="my-3">Brand</h3> --}}
			        
			      </div>
			      @foreach($brands as $brand)
			      <div class="col-md-2 my-4">
			        <a href="{{route('itemsbybrand',$brand->id)}}">
			        <img src="{{asset($brand->photo)}}" alt="" class="img-fluid brandimg">
			        </a>
			      </div>
			      @endforeach
			    </div>
	    	</div>
	    </section>
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">

    		<div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                   {{--  <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="{{asset($item->photo)}}" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

    </div>
    <!-- Modal end -->


@endsection

@section('script')
    <script type="text/javascript" src="{{asset('../my_asset/custom.js')}}"></script>
@endsection