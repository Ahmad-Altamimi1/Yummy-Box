@extends('layouts.master')
@section('content')
    <!-- End header -->
    <main>
        <!-- Start slides -->
        {{-- <div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="{{ url('images/slider-01.jpg') }}" alt="">
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
				<img src="{{ url('images/slider-02.jpg') }}" alt="">
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
				<img src="{{ url('images/slider-03.jpg') }}" alt="">
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
	</div> --}}

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider"
                data-swiper-options='{
    "slidesPerView": 1,
    "loop": true,
    "effect": "fade",
    "autoplay": {
        "delay": 5000
    },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    }
    }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/main-slider-1-1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <h2><span>Oragnic</span> <br>
                                        Food Market</h2>
                                    <a href="products.html" class=" thm-btn">Order Now</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <h2><span>Oragnic</span> <br>
                                        Food Market</h2>
                                    <a href="products.html" class=" thm-btn">Order Now</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                            class="organik-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                            class="organik-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section>
        <section class="feature-box">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="thm-tiny__slider" id="contact-infos-box"
                        data-tiny-options='{
            "container": "#contact-infos-box",
            "items": 1,
            "slideBy": "page",
            "gutter": 0,
            "mouseDrag": true,
            "autoplay": true,
            "nav": false,
            "controlsPosition": "bottom",
            "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
            "autoplayButtonOutput": false,
            "responsive": {
                "640": {
                  "items": 2,
                  "gutter": 30
                },
                "992": {
                  "gutter": 30,
                  "items": 3
                },
                "1200": {
                  "disable": true
                }
              }
        }'>
                        <div>
                            <div class="feature-box__single">
                                <i class="organik-icon-global-shipping feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Return Policy</h3>
                                    <p>Money back guarantee</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                        <div>
                            <div class="feature-box__single">
                                <i class="organik-icon-delivery-truck feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Free Shipping</h3>
                                    <p>On all orders over $25.00</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                        <div>
                            <div class="feature-box__single">
                                <i class="organik-icon-online-store feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Store Locator</h3>
                                    <p>Find your nearest store</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                    </div>
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.feature-box -->
        <!-- End slides -->
<section class="offer-banner">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__decor"></div><!-- /.block-title__decor -->
            <p>From the Blog</p>
            <h3>News & Articles</h3>
        </div>
        <div class="row" style="justify-content:space-around">
        
        @foreach ($categories as $category)
        <div class="col-4">
            <div class="blog-card">
                <div class="blog-card__image">
                    {{-- <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date --> --}}
                    <img src="{{ $category->img }}" alt="">
                    <a href="{{ route('subcategories') }}/{{ $category->id }}"></a>
                </div><!-- /.blog-card__image -->
                <div class="blog-card__content">
                    <!-- /.blog-card__meta -->
                    <h3><a href="{{ route('subcategories') }}/{{ $category->id }}">{{ $category->name }}</a></h3>
                    <p>{{ $category->description }}</p>
                </div><!-- /.blog-card__content -->
            </div><!-- /.blog-card -->
        </div>
        @endforeach
    </div>

    </div><!-- /.container -->
</section>
<section class="blog-two">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__decor"></div><!-- /.block-title__decor -->
            <p>From the Blog</p>
            <h3>News & Articles</h3>
        </div>
     {{-- <div class="container"> --}}
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-1.jpg);">
                            <div class="offer-banner__content">
                                <h3><span>100%</span> <br>Organic</h3>
                                <p>Kids </p>
                                <a href="{{ route('kidspricing') }}" class="thm-btn">Subscribe Now</a><!-- /.thm-btn -->
                            </div><!-- /.offer-banner__content -->
                        </div><!-- /.offer-banner__box -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-2.jpg);">
                            <div class="offer-banner__content">
                                <h3><span>100%</span> <br>Organic</h3>
                                <p>Emploeyy</p>
                                <a href="{{ route('employpricing') }}" class="thm-btn">Subscribe Now</a><!-- /.thm-btn -->
                            </div><!-- /.offer-banner__content -->
                        </div><!-- /.offer-banner__box -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            {{-- </div><!-- /.container --> --}}

    </div><!-- /.container -->
</section>

        <!-- Start About -->
        {{-- <div class="about-section-box">
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
	</div> --}}
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



    

      <section class="new-products">
            <img src="assets/images/shapes/new-product-shape-1.png" alt="" class="new-products__shape-1">
            <div class="container">
                <div class="new-products__top">
                    <div class="block-title ">
                        <div class="block-title__decor"></div><!-- /.block-title__decor -->
                        <p>Recently Added</p>
                        <h3>New Products</h3>
                    </div><!-- /.block-title -->

                    <ul class="post-filter filters list-unstyled">
                        <li class="active filter" data-filter=".filter-item">All</li>
                        <li class="filter" data-filter=".dairy">Dairy</li>
                        <li class="filter" data-filter=".pantry">Pantry
                        </li>
                        <li class="filter" data-filter=".meat">Meat
                        </li>
                        <li class="filter" data-filter=".fruits">Fruits
                        </li>
                        <li class="filter" data-filter=".veg">Vagetables
                        </li>
                    </ul>
                </div><!-- /.new-products__top -->
                <div class="row filter-layout">
                                            @foreach ($products as $product)

                    <div class="col-lg-4 col-md-6 filter-item dairy">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <span class="product-card__two-sale">sale</span>
                                <img src="{{ $product->img }}" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="{{ route('single') }}/ {{ $product->id }} "><i class="organik-icon-visibility"></i></a>
                                    <a href="#"><i class="organik-icon-heart"></i></a>
                                       <button id="cart" class="cart"
                                                                    name="{{ $product->id }}"
                                                                    namepr="{{ $product->name }}"
                                                                    image="{{ $product->img }}"
                                                                    des="{{ $product->shortDescription }} "
                                                                    price="{{ $product->price }}"><i class="organik-icon-shopping-cart"></i> </button>
                                    {{-- <a href="cart.html"></a> --}}
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                <div class="product-card__two-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.product-card__two-stars -->
                                <p>${{ $product->price }}</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div>
                    @endforeach
                    <!-- /.col-lg-4 -->
            
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        </div>
   <section class="call-to-action-two">
            <img src="assets/images/shapes/call-shape-2-1.png" alt="" class="call-to-action-two__shape-1">
            <img src="assets/images/shapes/call-shape-2-2.png" alt="" class="call-to-action-two__shape-2">
            <img src="assets/images/shapes/call-shape-2-3.png" alt="" class="call-to-action-two__shape-3">
            <img src="assets/images/shapes/call-shape-2-4.png" alt="" class="call-to-action-two__shape-4">
            <img src="assets/images/shapes/call-shape-2-5.png" alt="" class="call-to-action-two__shape-5">
            <img src="assets/images/shapes/call-shape-2-6.png" alt="" class="call-to-action-two__shape-6">
            <div class="container">
                <div class="row flex-xl-row-reverse">
                    <div class="col-lg-12 col-xl-6">
                        <div class="call-to-action-two__image">
                            <h2 class="floated-text">Healthy</h2><!-- /.floated-text -->
                            <img src="assets/images/resources/call-2-1.png" alt="">
                        </div><!-- /.call-to-action-two__image -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="call-to-action-two__content">
                            <div class="block-title text-left">
                                <div class="block-title__decor"></div><!-- /.block-title__decor -->
                                <p>Pure Organic Products</p>
                                <h3>Everyday Fresh Food</h3>
                            </div><!-- /.block-title -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Duis aute irure dolor in reprehen in derit.</h4>
                                    <p>Voluptate velit essects quis tempor orci. Suspendisse that potenti faucibus.</p>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Refresing to get such a touch
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Duis aute irure dolor in
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Reprehenderit in voluptate
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Velit esse cillum dolore eu
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Fugiat nulla pariatur
                                        </li>
                                    </ul><!-- /.list-unstyled -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <a href="products.html" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action-two__content -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-
          

                <!-- /flip-card-container -->


   <section class="testimonials-one">
            <div class="testimonials-one__head">
                <div class="container">
                    <div class="block-title text-center">
                        <div class="block-title__decor"></div><!-- /.block-title__decor -->
                        <p>Our Testimonials</p>
                        <h3>What People Say?</h3>
                    </div><!-- /.block-title -->
                </div><!-- /.container -->
            </div><!-- /.testimonials-one__head -->
            <div class="container">
                <div class="thm-tiny__slider" id="testimonials-one-box" data-tiny-options='{
            "container": "#testimonials-one-box",
            "items": 1,
            "slideBy": "page",
            "gutter": 0,
            "mouseDrag": true,
            "autoplay": true,
            "nav": false,
            "controlsPosition": "bottom",
            "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
            "autoplayButtonOutput": false,
            "responsive": {
                "640": {
                  "items": 2,
                  "gutter": 30
                },
                "992": {
                  "gutter": 30,
                  "items": 3
                },
                "1200": {
                  "disable": true
                }
              }
        }'>
                                            @foreach ($reviews as $key => $review)

                    <div>
                        
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__image">
                                <img src="{{ url($review->user->image) }}" alt="">
                            </div><!-- /.testimonials-one__image -->
                            <div class="testimonials-one__content">
                                <p>{{ $review->description }}</p>
                                <h3>{{ $review->user->name }}</h3>
                                <span>Customer</span>
                                 @for ($i = 0; $i < $review->Star; $i++)
                                                            <span class="star" data-star="{{ $i + 1 }}"
                                                                style="color: gold">&#9733;</span>
                                                        @endfor
                            </div><!-- /.testimonials-one__content -->
                        </div><!-- /.testimonials-one__single -->
                    </div>
                                            @endforeach
                 
                </div>
            </div><!-- /.container -->
        </section>



                <!-- Start Customer Reviews -->
               
            @endsection


            </body>

        </html>
