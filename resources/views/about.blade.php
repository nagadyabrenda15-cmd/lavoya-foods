@extends('layouts.master')
@section('title') About @endsection
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/food/break.jpeg')}}');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="home.blade.php">Home</a></span> <span>About us</span></p>
        <h1 class="mb-0 bread">About us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('images/testimony/saum.jpg') }}');">
        <a href="#" class="icon popup-vimeo d-flex justify-content-center align-items-center">
          <span class="icon-play"></span>
        </a>
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">Welcome to Lavoya Food Cafe</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p>Lavoya foods was established in the year 2022 in uganda
            the idea was invented by saum a mubs student
            together with her groupmates of BBC
            she later transformed it into now the Lavoya food services</p>
            <p>The meal is so delicious! The quality of the food is very high, the presentation flawless and the service impeccable.</p>
            <p>This defines us (Lavoya Foods)</p>
                    
          <p><a href="#" class="btn btn-primary">Shop now</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

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

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('{{asset('images/food/bunner1.jpeg')}}');">
  <div class="container">
    <div class="row justify-content-center py-5">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10000" style="color: #fff; font-weight: 500;">0</strong>
                <span style="color: #fff; font-weight: 500;">Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="100" style="color: #fff; font-weight: 500;">0</strong>
                <span style="color: #fff; font-weight: 500;">Branches</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000" style="color: #fff; font-weight: 500;">0</strong>
                <span style="color: #fff; font-weight: 500;">Partner</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="100" style="color: #fff; font-weight: 500;">0</strong>
                <span style="color: #fff; font-weight: 500;">Awards</span>
              </div>
            </div>
          </div>
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

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row no-gutters ftco-services">
      <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-shipped"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Free Shipping</h3>
            <span>On order over $100</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
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
      <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
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
      <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
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
@include('partials.footer')
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>

@endsection