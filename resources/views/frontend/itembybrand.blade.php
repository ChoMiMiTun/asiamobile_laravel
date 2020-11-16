@extends('frontend/frontendtemplate')

@section('title', 'Blog Posts')

@section('content')


	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Blog Single Sidebar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	    <section>
	    	<div class="container">
	    		<div class="row my-3">
			      <div class="col-md-12">
			        {{-- <h3 class="my-3">Brand</h3> --}}
			        
			      </div>
			      @foreach($brands as $brand)
			      <div class="col-md-2 brand-item">
			        <img src="{{asset($brand->photo)}}" alt="" class="img-fluid brandimg">
			      </div>
			      @endforeach
			    </div>
	    	</div>
	    </section>


@endsection