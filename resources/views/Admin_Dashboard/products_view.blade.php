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

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $products->image }}" class="card-img" alt="{{ $products->name }}">
                            <h5 class="card-title"> {{ $products->name }}</h5>
                            <div class="mb-3">
                                <label class="text-muted">Brief:</label>
                                <p class="card-text">{{ $products->breif}}</p>
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Description:</label>
                                <p class="card-text">{{ $products->description2 }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Details:</label>
                                <p class="card-text">{{ $products->description3 }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Period:</label>
                                <p class="card-text">{{ $products->period }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Location:</label>
                                <p class="card-text">{{ $products->location }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Time:</label>
                                <p class="card-text">{{ $products->time }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Total:</label>
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
</body>

</html>
