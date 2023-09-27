<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Nutrizen</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- font awsome  -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Site CSS -->
     <link rel="stylesheet" href=" {{url('css/stylem.css') }}">    
    <link rel="stylesheet" href="{{url ('css/menu.css') }}">  
    <link rel="stylesheet" href=" {{url('css/navcart.css') }}">    

    <link rel="stylesheet" href="{{ url('css/pricing.css') }}">   
    <link rel="stylesheet" href="{{ url('css/single-proudact.css') }}">    

    <link rel="stylesheet" href="{{ url('css/category.css') }}">    
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">      
    <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{url('css/responsive.css') }}">

    <!-- Custom CSS -->
        <link rel="stylesheet" href="{{url('css/custom.css') }}">


  
    <style>
		     .scrolled {
            background-color: #fff !important;
            transition: background-color 200ms linear;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
      body{
       margin-top: -12px;
      }
	   .fixed {
            position: fixed !important;
        }
		
    </style>

</head>

<body >
	<!-- Start header -->
	 <div class="container-fluid position-relative p-0" style="margin-top: -12px;">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
							
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i><strong style="color: white;"> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
                <!-- <img src="images/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="menu.html" class="nav-item nav-link">Menu</a>
                 
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                     <div class="dropdown">
                 
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"    >
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <img src="{{ url('images/Shopping_cart_icon.svg.png') }}"  width="30px"> <span style="color: white;">cart</span>{{ count((array) session('cart')) }}</span>
                </button>
 
                <div class="dropdown-menu" aria-labelledby="dLabel">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp

                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-success" id="total">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    
                    <div id="baba">
                       @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img ">
                                    <img src="../{{ $details['img'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-success"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="row">
                     
                        <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                    </div>
                </div>
                 
            </div>

                                        </li>
				                                      @if (Auth::check())
   <a href="#">
                                            <div><i class="fa-solid fa-user "></i>
                                            </div>
                                            <ul class="dropdown">

                                                {{-- <li> <a href="{{route('profile.show')}}">{{ Auth::user()->name }}</a></li> --}}
                                                <li><a href="{{ route('profile.show') }}">profile</a></li>
                                                <li><a href="chatify">Message</a></li>
                                                <li>
                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit">{{ __('Log Out') }}</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </a>
					
				    @else
                                <li class="{{ request()->is('login*') ? 'active' : '' }} "><a
                                      class="white nav-item nav-link"  href="{{ route('login') }}">Login</a></li>
                                <li class="{{ request()->is('register*') ? 'active' : '' }} "><a
                                       class="white nav-item nav-link"   href="{{ route('register') }}">Register</a></li>
                                @endif
                    {{-- <a href="login.html" class="btn btn-primary rounded-pill py-2 px-4">Register</a>	 --}}
				</div>
                    {{-- <a href="cart.html" class="btn  rounded-pill py-2 px-4" ><img src="{{ url('images/Shopping_cart_icon.svg.png') }}"  width="30px"> <span style="color: white;">cart</span></a> --}}
            </div>

        </nav>
	<!-- End header -->
	<main>
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#"  style="background-color: #2a722e; color: white !important;">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#" style="background-color: #2a722e; color: white !important;">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#" style="background-color: #2a722e; color: white !important;">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
<h1 class="m-b-20"><strong>Welcome To <br> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
						
						<p>Nourishing: We believe in nourishing your body with the best nature has to offer.

Wholesome: Our products are made from wholesome ingredients that promote well-being.

Sustainability: Committed to sustainability, we source our ingredients responsibly.
</p>
						<p>
Healthy Living: Encouraging a lifestyle of healthy living through nutritious choices.

Pure: We're dedicated to purity and the natural goodness of real food.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.html"  style="background-color: #2a722e; color: white !important;">Menu</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/health.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
				{{-- @dd($categories) --}}
	
	
<div class="container">
    <div class="row category" id="category">
	
			<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Category </h2>
						<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
					</div>
				</div>
			<div class="category-content d-flex">
@foreach ( $categories as $category )
	
        <div class="col-sm-6 category1">
          <span>{{ $category->name }}</span> 
			<a href="{{ route('subcategories') }}/{{ $category->id  }}"><img src="{{ $category->img }}" alt=""></a>
        </div>
@endforeach

       
    </div>
    </div>
</div>
@php
	
@endphp
	
	<!-- End Gallery -->
	<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="CodeHim">
      <!-- Style CSS -->
      <link rel="stylesheet" href="./css/pricing.css">
      <!-- Demo CSS (No need to include it into your project) -->
      <link rel="stylesheet" href="./css/demo.css">
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
      <main class="cd__main">
 <div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Pricing </h2>
					</div>
				</div> 
<div id="generic_price_table"> 
   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--PRICE HEADING START-->
                    <div class="price-heading clearfix">
                    </div>
                    <!--//PRICE HEADING END-->
                </div>
            </div>
        </div>
        <div class="container contpricing">
            <span class="kidsoption">Kids</span>
            <span class="employeeoption" >Employee</span>
            <!--BLOCK ROW START-->
            <div class="row pricing_click">
               
                
                <div class="col-md-6">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content active clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Standard</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">
								<form action="{{route('payment')}}/1" method="post">
									@csrf
                                <span class="prices">	
                                    <span class="sign">JOD</span>
                                    <span class="price">9.99</span>
                                    {{-- <span class="cent"></span> --}}
                                    <span class="period">/Weekly</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                            	<li><span>5</span> Meals</li>
                                                                <li><span></span> Free Delivery</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                        	<a class="" href=""><input type="submit" class="btn" value="Subscribe" style="background: transparent"></a>
                        </div>
						</form>	
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                <div class="col-md-6">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Unlimited</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">
								<form action="" method="post">

                                <span class="prices">
                                    <span class="sign">JOD</span>
                                    <span class="price">29.99</span>
                                    <span class="period">/MON</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                              	<li><span>20</span> Meals</li>
                                <li><span></span> Free Delivery</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                       <a class="" href=""><input type="submit" class="btn" value="Subscribe" style="background: transparent"></a>

                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
            </div>	
            <!--//BLOCK ROW END-->
            
        </div>
    </section>             
	
</div>
         <!-- END EDMO HTML (Happy Coding!)-->
      </main>
      
      <!-- Script JS -->
      <script src="./js/script.js"></script>
   
<div class="cardds">
   <div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2> Most popular</h2>
					</div>
				</div>
			</div>
			

				<div class="col-12">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								@foreach ($products as $product )
									@if($product)
										
									@endif
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-01.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>{{ $product->name }}</h4>
											<p>{{ $product->shortDescription }}</p>
											<div class="why-text-footer d-flex justify-content-between align-items-center">
												<h5>$ {{ $product->price }}</h5> 
												<a href="{{ route('single') }}/ {{ $product->id }} ">	<i class="fa fa-cart-plus " aria-hidden="true" style="color: #2a722e"></i></a>
												{{-- <a href="{{ route('add_to_cart', $product->id) }} ">Add to cart</a> --}}
											<button  id="cart" name="{{ $product->id}}" namepr="{{ $product->name}}" image="{{ $product->img}}" des="{{ $product->shortDescription}} " price="{{ $product->price}}"> <i class="fa fa-cart-plus " aria-hidden="true" ></i></button>

												
											</div>
											
										</div>
									</div>
								</div>
								@endforeach
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- /flip-card-container -->


	<!-- Start Customer Reviews -->
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
							@foreach ( $reviews as $review)
								
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{ $review->image }}" alt="" style="height: 128px;">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase" style="color: #2a722e !important">{{ $review->user->name}}</strong></h5>
								<h6 class="text-dark m-0">
									@for ($i=0 ; $i<$review->Star ;$i++)
										  <span class="star" data-star="{{$i +1}}" style="color:gold">&#9733;</span>
									@endfor
								</h6>
								<p class="m-0 pt-3">{{ $review->description }}</p>
							</div>
							@endforeach




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
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<!-- Footer -->
<!-- Footer -->
<footer class="text-center text-lg-start bg-f text-white">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div id="icons">
      <a href="" class="me-4 link-secondary">
     <i class="fa fa-faceAdd to Cart-official" aria-hidden="true"></i>

      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i><strong style="color: white;"> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
            <i class="fa fa-gem me-3 text-secondary"></i>
          </h6>
          <p>
         
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="menu.html" class="text-reset">Kids</a>
          </p>
          <p>
            <a href="menu.html" class="text-reset">Employee</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About us</a>
          </p>
          
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3 text-secondary"></i> Irbid , Jordan</p>
          <p>
            <i class="fa fa-envelope me-3 text-secondary"></i>
            nutrizen@gmail.com
          </p>
          <p><i class="fa fa-phone me-3 text-secondary"></i> +962 79 8540 904</p>
          <!-- <p><i class="fa fa-print me-3 text-secondary"></i> + 01 234 567 89</p> -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025); color: white; z-index: 19; position: relative;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">Ahmad Altamimi</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Footer -->
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></a>
</main>
	<!-- ALL JS FILES -->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js') }}"></script>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="{{url ('js/navbar.js') }}"></script>
	<script src="{{url ('js/pricing.js') }}"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script>
		var navbar = document.querySelector('nav');
        //   console.log(navbar);
          var image = document.querySelector(".logo-image");
          var lii = document.querySelectorAll(".navbar-expand-lg .navbar-nav .nav-link  ");
		  
          // Get the initial offset of the navigation bar
          var offset = navbar.offsetTop;

          // Function to handle the scroll event
          function handleScroll() {
						
					
                                        if (window.scrollY < 60) {
                                                  // Add the 'fixed' class to the navigation bar

                                                  navbar.classList.add("fixed");
                                                  navbar.classList.remove("scrolled");
                    lii.forEach(li => {

                                                  li.classList.remove("licolor");
                                                //   li.style.color='red !important';
                    });

                                                  // Set the background color to red
                                                  navbar.style.background = "transparent";
                                        } else {
                                                  // Remove the 'fixed' class from the navigation bar
                                                //   navbar.classList.remove("fixed");
                                                  navbar.classList.add("scrolled");
                                                 lii.forEach(li => {
                                                  li.classList.add("licolor");
                    });



                                                  // Reset the background color
                                        }

          }

          // Attach the scroll event listener to the window
          window.addEventListener('scroll', handleScroll);
	</script>
    <script src="{{ url('js/custom.js') }}"></script>

</body>
</html>