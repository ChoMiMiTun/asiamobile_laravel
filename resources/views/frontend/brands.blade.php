@extends('frontend/frontendtemplate')

@section('title', 'Blog Posts')

@section('content')



	    <section class="my-3 py-3">
	    	<div class="container">
	    		<div class="row my-3 pb-3">
			      <div class="col-md-12">
			        <h3 class="my-3 py-3">Brands</h3>
			        
			      </div>

			      @foreach($data[2] as $brand)
			      <div class="col-md-2 brand-item my-3">
			        <a href="{{route('itemsbybrand',$brand->id)}}">
			        <img src="{{asset($brand->photo)}}" alt="" class="img-fluid brandimg">
			        </a>
			      </div>
			      @endforeach
			    </div>
	    	</div>
	    </section>


@endsection