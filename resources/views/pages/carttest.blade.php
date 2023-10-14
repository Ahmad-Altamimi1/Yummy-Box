@extends('layouts.master')
	<!-- Start About -->
  @section('content')
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Cart</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>Cart</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
@php
    $cart = session('cart');
@endphp

        <section class="cart-page">
            <div class="container">
                <div class="table-responsive">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                    @php $total = 0 @endphp

                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach

                       
                   
    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <tr>
                                <td>
                                    <div class="product-box">
                                        <img src="../{{ $details['img'] }}" alt="">
                                        <h3><a href="{{ route('single')/ $details['id'] }}">Banana</a></h3>
                                    </div><!-- /.product-box -->
                                </td>
                                <td>${{ $details['price'] }}</td>
                                <td>
                                    <div class="quantity-box">
                                        <button type="button" class="sub">-</button>
                                        <input type="number" id="2" value="{{ $details['quantity'] }}" />
                                        <button type="button" class="add">+</button>
                                    </div>
                                </td>
                                <td>
                                    ${{ $details['price'] *$details['quantity'] }}
                                </td>
                                <td>
                                    <i class="organik-icon-close remove-icon"></i>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>

                    </table><!-- /.table -->
                </div><!-- /.table-responsive -->
                <div class="row">
                    <div class="col-lg-8">
                        <form action="{{ route('discount') }}" class="contact-one__form" method="post">
                            <input type="text" placeholder="Enter Coupon Code">
                            <button type="submit" class="thm-btn">Apply Coupon</button><!-- /.thm-btn -->
 @isset($active)
                            <p>{{ $active }}</p>
                        @endisset
                        
                        </form><!-- /.contact-one__form -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <ul class="cart-total list-unstyled">
                            <li>
                                <span>Subtotal</span>
                                <span>{{ $ $total  }}</span>
                            </li>
                            <li>
                        
                                <span>Shipping Cost</span>
                                <span>$5.00 USD</span>
                            </li>
                            <li>
                                <span>Total</span>
                                         @if (isset($discountPercent))
                        @php
                         $totalafterdiscount= $total - ($total * $discountPercent) + 5
                        @endphp
                                <span>$ {{  $totalafterdiscount +5}}</span>
                                @else
                                <span>$ {{ $total + 5}}</span>
@endif
                            </li>
                        </ul><!-- /.cart-total -->
                        <div class="button-box">
                            <a href="#" class="thm-btn">Update</a><!-- /.thm-btn -->
                            <a href="#" class="thm-btn">Checkout</a><!-- /.thm-btn -->
                        </div><!-- /.button-box -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cart-page -->

      

    </div><!-- /.page-wrapper -->


  
    <!-- /.mobile-nav__wrapper -->


   
    <!-- /.search-popup -->

    @endsection
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
