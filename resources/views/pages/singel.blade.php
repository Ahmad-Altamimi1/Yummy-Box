@extends('layouts.master')
@section('content')
    
<style>.all-page-title::before{
	background: rgb(0, 0, 0);
	content: "";
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 1;
	opacity: 0.8;	
}</style>
</head>

<body>
	<!-- Start header -->

	<!-- End header -->
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb " style=" padding-top: 100px;">
		<div class="container text-center" >
			<div class="row">
				<div class="col-lg-12">
				
				</div></div>
			</div>
		</div>
	<!-- End header -->













<div id="single-prodact">
    <div class="container single ">

        <div class="left-single">
        <img src="{{url ( $product->img) }}" alt="">
        <div class="more-pic-in-single-proudact">
          <img name="slide">
        <img src="{{url ($product->img1) }}" alt="">
        <img src="{{url ($product->img2) }}" alt="">
        <img src="{{url ($product->img3) }}" alt="">
        <!-- <img src="images/single-proudact.jpg" alt=""> -->
          </div>
          </div>

        <div class="right-single">
<!-- <span class="company-name" >Nutri<span style="color: black;">zen</span></span> -->
<h5 class="proudact-name" >{{ $product->name}}</h5>
<p id="proudact-description">{{ $product->longDescription}}</p>
   <span id="price">${{ $product->price}}</span>
   <div>
    <div id="counter">
      
      <span id="minus">-</span> <span id="number"><span class="count">:{{ $quintty }}</span></span> <span id="plus">+</span>
    </div>
  </div>
    <div  class="add_to_cart d-flex flex-column"> 	<button  id="cart" name="{{ $product->id}}" namepr="{{ $product->name}}" image="{{ $product->img}}" des="{{ $product->shortDescription}} " price="{{ $product->price}}"> <i class="fa fa-cart-plus " aria-hidden="true" ></i></button>
</div>

    </div>
  </div>
</div>
<!-- ______________  -->
    <div id="more_proudact_in_single" class="d-flex">
      <div class="container d-flex ">
      <div id="more_proudact" class="d-flex flex-column justify-content-center">
        <img src="images/Chickpea-and-Avocado-Sandwich-768x509.jpg.webp" alt="">
        <h4></h4>
        <p>The chicken is moist and juicy a handful of capers an </p>
        <span class="add_to_cart d-flex flex-column"> <div class="add">Add To Card </div>
          <a href="cart.html">
          	<i class="fa fa-cart-plus " aria-hidden="true" >
        </i>
        </span>
        <!-- <span class="cart_icon"></a></span> -->
      </div> <div id="more_proudact" class="d-flex flex-column justify-content-center">
        <img src="images/Chickpea-and-Avocado-Sandwich-768x509.jpg.webp" alt="">
        <h4>chicken with tomato</h4>
        <p>The chicken is moist and juicy a handful of capers an </p>
        <span class="add_to_cart d-flex flex-column"> <div class="add">Add To Card </div>
          <a href="cart.html">
          	<i class="fa fa-cart-plus " aria-hidden="true" >
        </i>
        </span>
        <!-- <span class="cart_icon"></a></span> -->
      </div>
       <div id="more_proudact" class="d-flex flex-column justify-content-center">
        <img src="images/Chickpea-and-Avocado-Sandwich-768x509.jpg.webp" alt="">
        <h4>chicken with tomato</h4>
        <p>The chicken is moist and juicy a handful of capers an </p>
        <span class="add_to_cart d-flex flex-column"> <div class="add">Add To Card </div>
          <a href="cart.html">
          	<i class="fa fa-cart-plus " aria-hidden="true" >
        </i>
        </span>
        <!-- <span class="cart_icon"></a></span> -->
      </div> <div id="more_proudact" class="d-flex flex-column justify-content-center">
        <img src="images/Chickpea-and-Avocado-Sandwich-768x509.jpg.webp" alt="">
        <h4>chicken with tomato</h4>
        <p>The chicken is moist and juicy a handful of capers an </p>
        <span class="add_to_cart d-flex flex-column"> <div class="add">Add To Card </div>
          <a href="cart.html">
          	<i class="fa fa-cart-plus " aria-hidden="true" >
        </i>
        </span>
        <!-- <span class="cart_icon"></a></span> -->
      </div>
 
  
   
    </div>
    
  
  </div>
	</div>


  
<div class="customer-reviews-box">
		<div class="container">
			<div class="row" style="padding-bottom: 70px;">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
					</div>
				</div>
			
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/nadeem.jpg" alt="" style="height: 128px;">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/nadeem.jpg" alt="" style="height: 128px;">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/nadeem.jpg" alt="" style="height: 128px;">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection






<!-- Footer -->
<!-- Footer -->
	<!-- End Footer -->
{{-- 	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></a>
<!-- jQuery JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<!-- Slick Carousel JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/single.js"></script>
     --}}