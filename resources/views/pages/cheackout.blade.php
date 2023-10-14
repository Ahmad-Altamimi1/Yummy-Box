@extends('layouts.master')
{{-- @section('css') --}}
    <link rel="stylesheet" href="{{url ('/css/cart&personal.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit&family=Space+Grotesk:wght@500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- @endsection --}}
@section('content')
    <section class=" row col-sm-12">
        <div class="left col-lg-6 col-md-12 col-sm-12">
            <h1 class="header">Order summary</h1>
            <div class="container col-sm-12">
                <div class="orders">
                    {{-- @dd($products) --}}
                    @php
                        $total = 0;
                    @endphp
                    @if (isset($products))
                        @foreach ($products as $product)

                        {{-- @dd($product['quantity']) --}}
                            @php
                                $total += $product['price'] * $product['quantity'];
                            @endphp
                            <div class="order">
                                <img src=" {{ $product['img'] }} " alt="" />
                                <h4 class="name1">{{ $product['name'] }}</h4>
                                <h5 class="price">${{ $product['price'] * $product['quantity'] }}</h5>

                                <h5 class="price">Qty:{{ $product['quantity']}}</h5>

                            </div>
                        @endforeach
                    @else
                        <h1>No products!</h1>
                    @endif

                </div>
                <div class="summary">
                    @if (isset($products->discount))
                        <div>
                            <h4 class="total">DISC:{{ $products->discount }}%</h3>

                                <h4 class="total">${{ ($total * $products->discount) / 100 }}</h3>
                        </div>
                    @endif
                    <div>
                        <h4 class="total">DILIVARY</h3>
                            <h4 class="total">$5</h3>
                    </div>
                    <div>
                        <h1 class="total">TOTAL</h1>
                        @if (isset($products->discount))
                            <h1 class="total">${{ $total - ($total * $products->discount) / 100 - 5 }}</h1>
                        @else
                            <h1 class="total">${{ $total + 5 }}</h1>
                        @endif
                    </div>
                </div>
            </div>
            <button class="btn check">check out</button>
        </div>

        <div class="right col-lg-6 col-md-12 col-sm-12">
{{--             
            <div class="Completed ">
              <img src="/image/icon-complete.svg" alt="" />
              <h1>Thank you!</h1>
              <h2>We've added your details</h2>
              <h4>chooze your payment method</h4>
              <br>
              <form style="width:100%" action="{{ route('stripe') }}" method="post">
                @csrf
               
                <button type="submit"><i class="fa fa-paypal" aria-hidden="true"></i> paypal</button>
                <input type="hidden" name="price" value="{{ $total + 40 }}">
                </form>
              
              <br>


              <form style="width:100%" action="{{ route('stripe') }}/1" method="post">
                @csrf
                <input type="hidden" name="price" value="{{ $total + 40 }}">
                <input type="text">
               
                <button type="submit"><i class="fa fa-cc-stripe" aria-hidden="true"></i> Stripe</button>
                </form>
            </div> --}}
      <form class="personal form" method="get" action="{{ route('checkOut') }}">
                @csrf
                <h1 style="font-size: 30px;font-weight:bold">Personal Information</h1>
                <p>FULL NAME</p>
                <input name="name" type="text" placeholder="e.g.murad alshorman" class="name"
                    value="{{ Auth::user()->name }}" />
                <span style="color:red">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span><br>
                <p>FULL ADDRESS</p>
                <input name="address" type="text" placeholder="Irbid/jordan" maxlength="14" class="name"
                @if (isset(Auth::user()->address))
                value="{{ Auth::user()->address->address }}"
            @endif />
                <span style="color:red">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span><br>

                <p>PHONE NUMBER</p>
                <input name="number" type="text" placeholder="962777777777"
                    value="{{ Auth::user()->number }}" class="name" />
                <span style="color:red">
                    @error('number')
                        {{ $message }}
                    @enderror
                </span><br>




                <input type="submit" value="Confirm" class="btn" />
            </form>
        </div>
    </section>
@endsection
    <script src="{{ url('/js/jquery.min.js') }}"></script>
    <script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/js/cart&personal.js') }}"></script>