@extends('frontend/frontendtemplate')

@section('title', 'Blog Posts')

@section('content')


	<!-- Breadcrumbs -->
	{{-- <div class="breadcrumbs">
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
	</div> --}}
	<!-- End Breadcrumbs -->
		
	<!-- Start Blog Single -->
	<section class="blog-single section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12">
					<div class="blog-single-main">
						<div class="row">
							<div class="col-12">
								<div class="image">
									<img src="{{asset($blogdetail->photo)}}" alt="#">
								</div>
								<div class="blog-detail">
									<h2 class="blog-title">{{$blogdetail->title}}</h2>
									<div class="blog-meta">
										<span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>{{$blogdetail->updated_at->format('d-m-Y')}}</a></span>
									</div>
									<div class="content">
										<p>{!!$blogdetail->content!!}</p>
									</div>
								</div>
			</div>
		</div>
	</section>
	<!--/ End Blog Single -->


@endsection