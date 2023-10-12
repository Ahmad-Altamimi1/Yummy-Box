<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}">
    <script src="{{ url('https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap CSS -->
	<!-- font awsome  -->
	<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Site CSS -->
    {{-- <link rel="stylesheet" href=" {{url('css/style.css') }}">     --}}
    <link rel="stylesheet" href=" {{url('css/navcart.css') }}">    
    <link rel="stylesheet" href=" {{url('css/superslides.css') }}">    
    <link rel="stylesheet" href=" {{url('css/stylem.css') }}">    
    <link rel="stylesheet" href="{{url ('css/menu.css') }}">    
    <link rel="stylesheet" href="{{ url('css/pricing.css') }}">   
    <link rel="stylesheet" href="{{ url('css/single-proudact.css') }}">    

    <link rel="stylesheet" href="{{ url('css/category.css') }}">    
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">    
    <link rel="stylesheet" href="{{ url('css/sub-category.css') }}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('css/custom.css') }}">
<link rel="stylesheet" href="{{url('css/cart.css') }}">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   <link rel="stylesheet" href="{{url ('//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css') }}">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->

	<!-- font awsome  -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Site CSS -->
  
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}">
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap') }}"
        rel="stylesheet">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ url('https://kit.fontawesome.com/659ed253a5.js') }}" crossorigin="anonymous"></script> --}}
    {{-- <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}"> --}}

    {{-- <link rel="stylesheet" href="{{ url('css/tiny-slider.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('css/tiny-slider.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('css/aos.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('css/flatpickr.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href=" {{ url('css/glightbox.min.css') }}"> --}}

    {{-- <link rel="stylesheet" href="{{ url('css/style.css') }}"> --}}
    <link rel="stylesheet" href=" {{ url('css/home.css') }} ">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">    
		{{-- <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href={{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/animate/animate.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/fontawesome/css/all.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/jarallax/jarallax.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/organik-icon/organik-icons.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/nouislider/nouislider.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/nouislider/nouislider.pips.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/odometer/odometer.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/swiper/swiper.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/organik.css') }} />

    <title>Nutrizen</title>
</head>
<body>
    <?php 

use App\Models\Cart;
use App\Models\Products;
    if (Auth::check()) {
            $user = Auth::user();
            $cartItems = Cart::where('userId', $user->id)->get();
            $cart = [];

            foreach ($cartItems as $cartItem) {
                // Fetch the associated product details
                $product = Products::find($cartItem->productId);

                // Create an array with the desired product details
                $cart[$cartItem->productId] = [
                    "id" => $cartItem->productId,
                    "product_id" => $product->productId,
                    "name" => $product->name,
                    "img" => $product->img  ,
                    "price" => $product->price,
                    'cartDescription' => $product->cartDescription,
                    "quantity" => $cartItem->quantity
                    // Add other product details if needed
                ];
            }
        


            session()->put('cart', $cart);
        }

      
    
?>
    
     <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="main-logo">
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo-dark.png" width="105" alt="" style="width: 100px !important;
    height: 62px;">
                        </a>
                        <div class="mobile-nav__buttons">
                            <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>
                            <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
                        </div><!-- /.mobile__buttons -->

                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.main-logo -->

                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <div class="topbar__info">
                            <i class="organik-icon-email"></i>
                            <p>Email <a href="mailto:info@organik.com">nutrizen@organik.com</a></p>
                        </div><!-- /.topbar__info -->
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <div class="topbar__info">
                            <i class="organik-icon-calling"></i>
                            <p>Phone <a href="tel:+92-666-888-0000">+962798540904</a></p>
                        </div><!-- /.topbar__info -->
                        <div class="topbar__buttons">
                            {{-- <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a> --}}
                            

 <h2><span id="countcart" class="badge bg-danger" style="      position: absolute;
    top: -30px;
    width: 30px;
    left: 13px;
    font-size: 16px;
    height: 22px;">{{ count((array) session('cart')) }}</span></h2>
                           <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
                        </div>
   
                </div>
                 
            </div>
                    </div>
                    

                        </div><!-- /.topbar__buttons -->
                    </div><!-- /.topbar__left -->

                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                                              @if (Auth::check())
 <div class="main-menu__login">
    <div>
                    <a href="{{ route('profile.show') }}"><i class="organik-icon-user"></i></a>
                      <form method="POST" action="{{ route('logout') }} " >
                                                        @csrf
                                                        <button class="logoutt" type="submit">{{ __('Log Out') }}</button>
                                                    </form>
                </div>
                </div>
                @else
                <div class="main-menu__login">
                    <li class="{{ request()->is('login*') ? 'active' : '' }}"><a
                                        href="{{ route('login') }}">Login</a></li>
                                <li class="{{ request()->is('register*') ? 'active' : '' }}"><a
                                        href="{{ route('register') }}">d</a></li>
                </div><!-- /.main-menu__login -->
                @endif
                    <ul class="main-menu__list">
                      <li class="{{ request()->is('home*') ? 'active' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                        <li>

                     <li class="{{ request()->is('products*') ? 'active' : '' }}"><a
                                        href="{{ route('subcategories') }}">menu</a></li>

                                <li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="about">About</a>
                                </li>
                                {{-- <li class="{{ request()->is('news*') ? 'active' : '' }}"><a
                                        href="{{ route('news') }}">News</a></li> --}}
                                <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
                                        <li>


                    </ul>
                                     <div class="topbar__buttons">
                            {{-- <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a> --}}
                            

 <h2 class="cartsticky"><span  class="cartsticky" id="countcart" class="badge bg-danger" style="      position: absolute;
    top: -30px;
    width: 30px;
    left: 13px;
    font-size: 16px;
    height: 22px;">{{ count((array) session('cart')) }}</span></h2>
                           <a href="#" class="mini-cart__toggler cartsticky"><i class="organik-icon-shopping-cart"></i></a>
                        </div>
                    {{-- <div class="main-menu__language">
                        <img src="assets/images/resources/flag-1-1.jpg" alt="">
                        <label class="sr-only" for="language-select">select language</label>
                        <!-- /#language-select.sr-only -->
                        <select class="selectpicker" id="language-select-header">
                            <option value="english">English</option>
                            <option value="arabic">Arabic</option>
                        </select>
                    </div><!-- /.main-menu__language --> --}}
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

  <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div>








 <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="organik-icon-close"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="organik-icon-email"></i>
                    <a href="mailto:needhelp@organik.com">needhelp@organik.com</a>
                </li>
                <li>
                    <i class="organik-icon-calling"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                                    @if (Auth::check())
 <div class="main-menu__login">
                    <a href="{{ route('profile.show') }}"><i class="organik-icon-user"></i></a>
                      <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit">{{ __('Log Out') }}</button>
                                                    </form>
                </div>
                @else
                <div class="main-menu__login">
                    <li class="{{ request()->is('login*') ? 'active' : '' }}"><a
                                        href="{{ route('login') }}">Login</a></li>
                                <li class="{{ request()->is('register*') ? 'active' : '' }}"><a
                                        href="{{ route('register') }}">d</a></li>
                </div><!-- /.main-menu__login -->
                @endif
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>






          <div class="mini-cart">
        <div class="mini-cart__overlay mini-cart__toggler"></div>
        <div class="mini-cart__content">
            <div class="mini-cart__top">
               
                <h3 class="mini-cart__title">Shopping Cart</h3>
                <span class="mini-cart__close mini-cart__toggler"><i class="organik-icon-close"></i></span>
            </div>
            <!-- /.mini-cart__top -->
             @php $total = 0 @endphp
               @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div id="baba">
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
            <div class="mini-cart__item">
                <img src="../{{ $details['img'] }}" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.html">{{ $details['name'] }}</a></h3>
                        <p>${{ $details['price'] }}</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        {{-- <button type="button" class="sub">-</button> --}}
                        <p >{{ $details['quantity'] }}</p>
                        {{-- <button type="button" class="add">+</button> --}}
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            @endforeach
            @endif
            </div>
       
            <p style="color: white;font-size:20px;padding-top:8px">Total: $ {{ $total }}</p>
            <a href="{{ route('cart') }}" class="thm-btn mini-cart__checkout">Show Cart</a>
            {{-- <a href="checkout.html" class="thm-btn mini-cart__checkout">Proceed To Checkout</a> --}}
        </div><!-- /.mini-cart__content -->
    </div><!-- /.cart-toggler -->
    