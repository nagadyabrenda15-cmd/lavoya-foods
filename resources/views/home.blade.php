@extends('layouts.master')

@section('title')
	Lavoya Foods
@endsection

@section('content')
    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url('{{asset('images/food/bunner.jpeg')}}');">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h2 style="color:#fff; font-size: 75px; font-weight: 500;">Feel the joy of mouthwatering food.</h2>
	              <h2 class="subheading mb-4">We deliver Quality & organic Food </h2>
	              <p><a href="#" class="btn btn-primary">Order Now</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url('{{asset('images/food/break.jpeg')}}');">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h2 style="color:#fff; font-size: 80px; font-weight: 500;">Quick eats for busy people.</h2>
	              <h2 class="subheading mb-4">We deliver healthy & organic Food</h2>
	              <p><a href="#" class="btn btn-primary">Order Now</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over Ugx 5000</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: {{ asset('images/category.jpg') }};">
									<div class="text text-center">
										<h2>Restaurants</h2>
										<p>Select Restuarant of your choice</p>
										<p><a href="#" class="btn btn-primary">Click on Any</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('{{asset('images/restuarant/4.jpeg')}}');">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="{{ route('restaurant')}}">Maama Konso Restuarant</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('{{asset('images/restuarant/3.jpeg')}}');">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="{{ route('restaurant')}}">Zigilar Restuarant</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('{{asset('images/restuarant/2.jpeg')}}');">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="{{ route('restaurant')}}">Yummys Restuarant</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('{{asset('images/restuarant/1.jpeg')}}');">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="{{ route('restaurant')}}">One Path Restuarant</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    {{-- <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Featured Delicious Food</span>
            <h2 class="mb-4">Our Menu</h2>
            <p>Fulfill your comfort food cravings,Wake up your taste buds.</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
				@foreach($products as $product)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{ route('product',['id'=> $product->id]) }}" class="img-prod"><img class="img-fluid" src="{{ asset('images/food/'.$product->image) }}" alt="{{ $product->name }}">
    						@if($product->discount > 0)
							<span class="status">{{ $product->discount }}%</span>
							@endif
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{ route('product',['id'=> $product->id]) }}">{{ $product->name }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
									@if($product->discount <= 0)
										<p class="price"><span class="mr-2">Ugx {{ $product->price }}</span></p>
									@else
		    							<p class="price"><span class="mr-2 price-dc">Ugx {{ $product->price }}</span><span class="price-sale">Ugx {{ $product->price-($product->price * ($product->discount/100)) }}</span></p>
									@endif
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{ route('product.addToCart',['id'=> $product->id]) }}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				@endforeach
    		</div>
    	</div>
    </section> --}}
		
		<section class="ftco-section img" style="background-image:linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('{{asset('images/food/bunner1.jpeg')}}');">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          	<span class="subheading" style=" font-weight: 500;" >Best Price For You</span>
            <h2 class="mb-4" style="color: #fff; font-weight: 500;">Deal of the day</h2>
            <p style="color: #fff; font-weight: 500;">Fulfill your comfort food cravings,Wake up your taste buds.</p>
            <h3><a href="#">Chicken</a></h3>
            <span class="price" style="color: #fff; font-weight: 500;">Ugx 21000 <a href="#">now Ugx 14700 only</a></span>
            <div id="timer" class="d-flex mt-5">
						  <div class="time" id="days"></div>
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
						</div>
          </div>
        </div>   		
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Fulfill your comfort food cravings,Wake up your taste buds.</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('{{asset('images/testimony/robert.jpg')}}');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">The meal was delicious! The quality of the food was very high, the presentation flawless and the service impeccable.</p>
                    <p class="name">Robert Kawalya</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('{{asset('images/testimony/nico.jpg')}}');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">The meal was delicious! The quality of the food was very high, the presentation flawless and the service impeccable.</p>
                    <p class="name">Malunda Nicolus</p>
                    <span class="position">Software Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('{{asset('images/aguti.jpg')}}');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">The meal was delicious! The quality of the food was very high, the presentation flawless and the service impeccable.</p>
                    <p class="name">Aguti Emmiema</p>
                    <span class="position">Sales Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('{{asset('images/')}}');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">The meal was delicious! The quality of the food was very high, the presentation flawless and the service impeccable.</p>
                    <p class="name">Christine</p>
                    <span class="position">Team Lead</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('{{asset('images/testimony/saum.jpg')}}');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">The meal was delicious! The quality of the food was very high, the presentation flawless and the service impeccable.</p>
                    <p class="name">Saum Kermu</p>
                    <span class="position">C.E.O Lavoya Foods</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
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