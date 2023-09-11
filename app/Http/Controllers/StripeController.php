<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

// use App\Models\Stripe;
// use App\Http\Requests\StoreStripeRequest;
// use App\Http\Requests\UpdateStripeRequest;
use Illuminate\Http\Request;
use Stripe;
use Stripe\Checkout\Session;
// use Stripe\StripeClient;


class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request)
    {
        if (Auth::check()) {

        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        
         \Stripe\Stripe::SetApiKey(config('strip.stripe_sk'));
        \Stripe\Stripe::setApiKey('sk_test_51NoRh3KjD3e5Hnk5snFlBHYl2YHnYsUbZ012l09868nPLxQgfCuesEAyP1sOF0BZfWDh9FBIWFP9tns1hM5LhI5n007xFC8uMV');
      $response =  \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => 
                        [
                            'name' => $request->price 
                    ],
                        'unit_amount' =>  $request->price * 100,
                    ],
                    'adjustable_quantity' => [
                        'enabled' => true,
                        'minimum' => 1,
                        'maximum' => 10,
                    ],
                    'quantity' => 1,
                ],
            ],
            'automatic_tax' => ['enabled' => true],
            'mode' => 'payment',
            'success_url' => route('stripe_success'),
            'cancel_url' => route('stripe_cancel'),
        ]);
        return redirect()->away($response->url);
    } else {
     return 'hi';
       }
}
    public function success()
    {
        
    }
    public function cancel()
    {
        
    }}

    
    