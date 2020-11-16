@extends('frontend/frontendtemplate')

@section('title', 'Item Detail')

@section('content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Item detail</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<section class="item-detail section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="{{asset($item->photo)}}">
				</div>
				<div class="col-md-8">
					
					<div class="item">
						<h4>{{$item->name}}</h4><br><br>

						@if($item->discount)
						<h6><strong>Price:</strong> <span class="text-warning">{{number_format($item->discount)}} Ks</span> &nbsp;
							<del>{{number_format($item->price)}} Ks</del></h6>
						@else
						<strong>Price:</strong> <h6 class="text-warning">{{number_format($item->price)}} Ks</h6>
						@endif

						<div class="description">
							{!!$item->description!!}
						</div>

						<div class="quickview-content">
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
						</div>
						</div>

					</div>

				</div>
			</div>

{{-- 			<div class="row">
				<div class="col-md-12">

				</div>
			</div> --}}
		</div>
	</section>

@endsection