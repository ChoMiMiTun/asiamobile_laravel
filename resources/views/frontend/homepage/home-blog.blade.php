	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>From Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				
				@foreach($blogs as $blog)

					<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="{{asset($blog->photo)}}" alt="#" class="img-fluid">
						<div class="content">
							<p class="date">22 July , 2020. Monday</p>
							<a href="#" class="title">{{$blog->title}}</a>
							<a href="{{route('blogdetail', $blog->id)}}" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>

				@endforeach

			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->