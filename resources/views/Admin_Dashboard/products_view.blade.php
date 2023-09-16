<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <!-- Include your CSS and JavaScript assets here -->
    <link rel="stylesheet" href="your-custom-styles.css"> <!-- Add your custom CSS file here -->
    <style>
        /* Add inline CSS styles or customize the styles in your custom CSS file */
        body {
            background-color: #f0f0f0;
        }

        .container {
            padding: 20px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 10px;
        }

        /* Style for the image */
        .card-img {
            max-width: 100%;
            height: auto;
        }

        /* Customize other styles as needed */
    </style>
</head>
@extends('layouts.adminMaster')

@section('content')
<div class="content " >

    <div style="margin: 0% 8% ">
        <div style="width: 100%">
     <br><br>

    <div class="container">
        <div class="card">
                        <div class="card-body">
                            <img src="{{ $products->image }}" class="card-img" alt="{{ $products->name }}" style="height:300px ;">
                           <br><br> <h3 class="card-title"> {{ $products->name }}</h3>
                            <div class="mb-3"> <br>
                              <h5>Brief:</h5>
                                <p class="card-text">{{ $products->breif}}</p>
                            </div>
                            <div class="mb-3">
                              <h5>Description:</h5>
                                <p class="card-text">{{ $products->description2 }}</p>
                            </div>
                            <div class="mb-3">
                                <h5>Details:</h5>
                                <p class="card-text">{{ $products->description3 }}</p>
                            </div>
                            <div class="mb-3">
                              <h5>Period:</h5>
                                <p class="card-text">{{ $products->period }}</p>
                            </div>
                            <div class="mb-3">
                               <h5>Location:</h5>
                                <p class="card-text">{{ $products->location }}</p>
                            </div>
                            <div class="mb-3">
                               <h5>Time:</h5>
                                <p class="card-text">{{ $products->time }}</p>
                            </div>
                            <div class="mb-3">
                               <h5>Total:</h5>
                                <p class="card-text">{{ $products->total }}</p>
                            </div>
                            <!-- Add other product details as needed -->
                        </div>
                    </div>
                </div>

                <!-- Add other product details as needed -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
