@extends('frontend/frontendtemplate')

@section('title', 'Welcome Asia Mobile Store')

@section('content')

	<section class="order section">
		<div class="container">
			<div class="row">
				<div class="offset-3 col-md-6">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Your Order</h4>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<td>Product</td>
									<td>Subtotal</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection