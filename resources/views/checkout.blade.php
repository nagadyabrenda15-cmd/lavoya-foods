@extends('layouts.master')

@section('title')
	Checkout
@endsection

@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/food/slider4.jpg') }}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home.blade.php">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>
	@if (session('success'))
	<div class="alert alert-success" id="success-alert">
		{{ session('success') }}
	</div>
	@endif

	@if (session('error'))
		<div class="alert alert-danger" id="error-alert">
			{{ session('error') }}
		</div>
	@endif
    <section class="ftco-section">
      <div class="container">
		<form action="{{ route('place-order')}}" method="POST">
			@csrf
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						
				<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" name="first_name" class="form-control" placeholder="" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" name="last_name" class="form-control" placeholder="" required>
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">City</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="city" id="" class="form-control">
		                  	<option value="Kampala">Kampala</option>
		                    <option value="Wakiso">Wakiso</option>
		                    <option value="Entebbe">Entebbe</option>
		                    <option value="Mukono">Mukono</option>
		                    <option value="Jinja">Jinja</option>
		                    
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" name="street_address" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" name="appartment" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <!-- <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div> -->
		            <!-- <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div> -->
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text"  name="phone" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="email" name="email" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	{{-- <div class="form-group mt-4">
									<div class="radio">
										  <label class="mr-3"><input type="radio" name="payment_method"> Create an Account? </label>
										  <label><input type="radio" name="payment_method"> Ship to different address</label>
										</div>
									</div> --}}
                </div>
	            </div>
	          
					</div>
					<!-- Existing code -->
					<div class="col-xl-5">
						<div class="row mt-5 pt-3">
<div class="col-md-12 d-flex mb-5">
    <div class="col-md-12 d-flex mb-5">
		<div class="cart-detail cart-total p-3 p-md-4">
			<h3 class="billing-heading mb-4">Cart Total</h3>
			@foreach ($cart->items as $item)
				<p class="d-flex">
					<span>{{ $item->name }}</span>
					<span>Ugx {{ $item->price }}</span>
				</p>
			@endforeach
			<hr>
			<p class="d-flex total-price">
				<span>Total</span>
				<span>Ugx {{ $cart->totalPrice }}</span>
			</p>
		</div>
	</div>
	
</div>

<!-- Remaining code -->

<div class="col-md-12">
	<div class="cart-detail p-3 p-md-4">
		<h3 class="billing-heading mb-4">Payment Method</h3>
				  <div class="form-group">
					  <div class="col-md-12">
						  <div class="radio">
							 <label><input type="radio" name="payment_method" class="mr-2" value="Cash on Delivery"> Cash on Delivery</label>
						  </div>
					  </div>
				  </div>
				  <div class="form-group">
					  <div class="col-md-12">
						  <div class="radio">
							 <label><input type="radio" name="payment_method" class="mr-2" value="Airtel Money"> Airtel Money</label>
						  </div>
					  </div>
				  </div>
				   <div class="form-group">
					  <div class="col-md-12">
						  <div class="radio">
							 <label><input type="radio" name="payment_method" class="mr-2" value="Mobile Money"> Mobile Money</label>
						  </div>
					  </div>
				  </div> 
				  <div class="form-group">
					  <div class="col-md-12">
						  <div class="checkbox">
							 <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
						  </div>
					  </div>
				  </div>
				  <p><button type="submit" class="btn btn-primary py-3 px-4">Place an order</button></p>
			  </div>

</div>
</div> <!-- .col-md-8 -->
</div>
</form>
</div>
	</section>
<!-- .section -->

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
	@include('partials.footer')
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
@endsection

@section('scripts')
  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
@endsection
