@extends('layouts.master')
@section('title', 'Home')

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>



<style>
    .site-footer {
        display: none;
    }
    .images{
          width: 80%;
    }
    form{
          border: 1px solid #999;
          box-shadow: 20px 10px 10px #999;
          width: 75%;
          margin: auto;
    }
    .payment{
          margin:100px auto 0 auto;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          align-items: center;
          height: 100vh;
    }
</style>


@section('content')

    <div class="container">
        <div class="row justify-content-center payment">
            <div class="col-lg-6">
                <form action="paypal" method="POST" class="p-5 rounded donation-form " data-aos="fade-up">
                    @csrf
                    <div class="text-center mb-4">
                        <img src="../images/paypal.webp" alt="PayPal Logo" class="images"">

                    </div>
                    <div class="input-group mb-3">
                        <input type="text" placeholder="0.00" class="form-control" id="cont" name="price"
                            value="$1.00">
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="background-color: #54ac75;">Pay with
                        PayPal</button>
                </form>
            </div>
            <div class="col-lg-6">
                <form action="stripe/1" method="post" class="p-5 rounded donation-form" style="padding: 0px 50px;">
                    @csrf
                    <div class="text-center mb-4">
                        <img src="../images/visa.png" alt="Visa Logo"class="images" ">

                    </div>
                    <div class="input-group mb-3">
                        <input type="text" placeholder="0.00" class="form-control" name="price"
                            value="{{ old('price') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="background-color: #54ac75;">Pay with
                        Visa</button>
                </form>
            </div>
        </div>
    </div>


@endsection
