@extends('layouts.master')
@section('content')

@section('content')
    <section class="products-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="product-sidebar">
                        <div class="product-sidebar__single product-sidebar__search-widget">
                            <form action="{{ route("search_products") }}" method="get" >
                                <input name="search" type="text" placeholder="Search">
                                <button class="organik-icon-magnifying-glass" type="submit"></button>
                            </form>
                        </div><!-- /.product-sidebar__single -->
                        <div class="product-sidebar__single">
                            <h3>Categories</h3>
                            <ul class="list-unstyled product-sidebar__links">
                                <li><a href="{{ route('subcategories') }}">All<i class="fa fa-angle-right"></i></a></li>
                               @foreach ($categories as $category) 
                               <li><a href="{{ route('subcategories', ['id' => $category->id]) }}">{{ $category->name }} <i class="fa fa-angle-right"></i></a></li>
                               @endforeach
                            </ul><!-- /.list-unstyled product-sidebar__links -->
                        </div>
                        <div class="product-sidebar__single">
                            <h3>Price</h3>
                            <div class="product-sidebar__price-range">
                                <div class="range-slider-price" id="range-slider-price"></div>
                              <form method="POST" action="{{ route("price_products") }}">
                                @csrf
                                <div class="form-group">
                                    <div class="left">
                                        <p>$<span id="min-value-rangeslider"></span></p>
                                        <input value=0 id="min" type="text" name="rangemin" hidden>
                                        <span>-</span>
                                        <p>$<span id="max-value-rangeslider"></span></p>
                                        <input value=0 id="max" type="text" name="rangemax" hidden>
                                    </div><!-- /.left -->
                                    <div class="right">
                                        <input type="submit" class="thm-btn" value="Filter">
                                    </div><!-- /.right -->
                                </div>
                              </form>
                            </div><!-- /.product-sidebar__price-range -->
                        </div><!-- /.product-sidebar__single -->
                        <!-- /.product-sidebar__single -->
                    </div><!-- /.product-sidebar -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-3 -->
				
                <div class="col-sm-12 col-md-12 col-lg-9">
					  <div class="product-sorter">
                            <p>Showing 1–9 of 12 results</p>
                            <div class="product-sorter__select filterss">
                              	<form action="{{ route('sort.by') }}/{{ request()->route('id') }}" method="post">
					@csrf
				<input type="submit" name="lowest_price" sort_by='lowest_price' value="A-Z">
				<input type="submit" value="Z-A" sort_by="highest_price" name="highest_price" >
				</form>
                            </div>
					  </div>
                    <div class="product-sorter">
                        <h1>OUR PRODUCTS</h1>
                        <!-- /.product-sorter__select -->
                    </div><!-- /.product-sorter -->
                    <div class="row">
                       @foreach ($products as $product )
                       <div class="col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-card__image">
                                <img src="{{ asset("assets/images/products/product-1-1.jpg") }}" alt="">
                                <div class="product-card__image-content">
                                    <a href={{ route('single', ['id' => $product->id]) }}><i class="organik-icon-visibility"></i></a>
												<a  id="cart" class="cart" name="{{ $product->id}}" namepr="{{ $product->name}}" image="{{ $product->img}}" des="{{ $product->shortDescription}} " price="{{ $product->price}}"> <i class="organik-icon-shopping-cart"></i></a>

                                    {{-- <a href="{{ route('add_to_cart', ['id' => $product->id]) }}"><i class="organik-icon-shopping-cart"></i></a> --}}
                                </div><!-- /.product-card__image-content -->
                            </div><!-- /.product-card__image -->
                            <div class="product-card__content">
                                <div class="product-card__left">
                                    <h3><a href={{ route('single', ['id' => $product->id]) }}>{{ $product->name }}</a></h3>
                                    <p>{{ $product->price }}</p>
                                </div><!-- /.product-card__left -->
                      @php
    $reviews = $product->reviews;

    // Check if $reviews is not null and is not empty
    if (!is_null($reviews) && count($reviews) > 0) {
        $productRatings = $reviews->pluck('review')->toArray();
        $averageRating = count($productRatings) > 0 ? array_sum($productRatings) / count($productRatings) : 0;
    } else {
        // Handle the case where there are no reviews
        $averageRating = 0;
    }
@endphp

                                <div class="product-card__right">
                                     @for ($i = 1; $i <= 5; $i++)
                                    
                                        @if ($i <= $averageRating)
                                            <i class="fa fa-star"></i>
                                        @else
                                        <i class="far fa-star"></i> 
                                        @endif
                                    </a>
                                @endfor
                                </div><!-- /.product-card__right -->
                            </div><!-- /.product-card__content -->
                        </div><!-- /.product-card -->
                    </div>
                       @endforeach

                    </div>
                    <div class="text-center">
                        <a href="#" class="thm-btn products__load-more">Load More</a><!-- /.thm-btn -->
                    </div><!-- /.text-center -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.products-page -->



    </div><!-- /.page-wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="organik-icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    {{-- <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a> --}}
@endsection
	@endsection