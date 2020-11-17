


	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Reviews</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->

						@foreach($data[3] as $review)

						<div class="blog-single">
							<blockquote> <i class="fa fa-quote-left"></i> 
								{!!$review->feedback!!}
							</blockquote>
						</div>

						@endforeach

						<div class="blog-single">
							<blockquote> <i class="fa fa-quote-left"></i> Do what you love to do and give it your very best. Whether it's business or baseball, or the theater, or any field. ..
							</blockquote>
						</div>

						<div class="blog-single">
							<blockquote> <i class="fa fa-quote-left"></i> Do what you love to do and give it your very best. Whether it's business or baseball, or the theater, or any field. ..
							</blockquote>
						</div>

						<div class="blog-single">
							<blockquote> <i class="fa fa-quote-left"></i> Do what you love to do and give it your very best. Whether it's business or baseball, or the theater, or any field. ..
							</blockquote>
						</div>

						<div class="blog-single">
							<blockquote> <i class="fa fa-quote-left"></i> Do what you love to do and give it your very best. Whether it's business or baseball, or the theater, or any field. ..
							</blockquote>
						</div>


						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>