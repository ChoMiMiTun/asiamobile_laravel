@extends('frontend/frontendtemplate')

@section('title', 'Welcome Asia Mobile Store')

@section('content')

	<section class="blog-single section">
		<div class="container">
			<div class="row">

				<div class="col-12">			
					<div class="reply">
						<div class="reply-head">
							<h2 class="reply-title">Leave Your Review</h2>
							<!-- Comment Form -->
							<form method="post" action="{{route('review.store')}}" enctype="multipart/form-data" class="my-3">
                  			  @csrf

								<div class="row">
									{{-- <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Your Name<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Your Email<span>*</span></label>
											<input type="email" name="email" placeholder="" required="required">
										</div>
									</div> --}}
									<div class="col-12">
										<div class="form-group">
											<label>Any Feedback?<span>*</span></label>
											<textarea name="feedback" placeholder=""></textarea>
											<small>What do you think about us?</small>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="btn">Post comment</button>
										</div>
									</div>
								</div>
							</form>
							<!-- End Comment Form -->
						</div>
					</div>			
				</div>

			</div>
		</div>
	</section>
@endsection