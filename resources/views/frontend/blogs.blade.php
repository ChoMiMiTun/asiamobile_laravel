@extends('frontend/frontendtemplate')

@section('title', 'Blog Posts')

@section('content')

	<section class="blog-single section my-3">
		<div class="container">
			

				@foreach($blogs as $blog)
				<div class="row my-3 py-3">
					<div class="col-md-6">
						<img src="{{asset($blog->photo)}}" class="img-fluid">
					</div>
					<div class="col-md-6">
						<h4>{{$blog->title}}</h4>
						{!!substr($blog->content,0,500)!!}...
						<p class="my-3"><a href="{{route('blogdetail', $blog->id)}}" class="more-btn btn btn-link">Continue Reading</a></p>
					</div>
				</div>
				@endforeach

			
		</div>
	</section>

@endsection