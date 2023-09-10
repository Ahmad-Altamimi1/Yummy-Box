<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset some default browser styles */
        html, body, h1 {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        header {
            background-color: #4CC790;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        main {
            margin: 20px;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            background-color: #FF9F29;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3c9ee5;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1>Manage Your Projects </h1>
    </header>
    <main>
        <div class="container">
            <div class="Projects-form">
                <form action="Admins_Projects" method="POST">
                    @csrf
                <label for="ProjectsName">Name</label>
                <input type="text" id="ProjectsName" name="name">
                <label for="ProjectsBreif">Breif</label>
                <input type="text" id="ProjectsBreif" name="breif">
                <label for="Description One">Description One</label>
                <input type="text" id="DescriptionOne" name="description2">
                <label for="Description Two">Description Two</label>
                <input type="text" id="DescriptionTwo" name="description3">
                <label for="ProjectsLocation">Location</label>
                <input type="text" id="ProjectsLocation" name="location">
                <label for="ProjectsTime">Time</label>
                <input type="text" id="ProjectsTime" name="time">
                <label for="ProjectsPeriod">Period</label>
                <input type="text" id="ProjectsPeriod" name="period">
                <label for="ProjectsTotal">Total</label>
                <input type="text" id="ProjectsTotal" name="total">
                <label for="ProjectsImage">Image</label>
                <input type="file" id="ProjectsImage" name="image">
                <button class="btn btn-warning" type="submit">Add project</button>
                </form>
            </div>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead style="background-color: #3c9ee5">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Breif</th>
                        <th>Description One</th>
                        <th>Description Two</th>
                        <th>Location</th>
                        <th>Time</th>
                        <th>Period</th>
                        <th>Total</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['breif'] }}</td>
                        <td>{{ $product['description2'] }}</td>
                        <td>{{ $product['description3'] }}</td>
                        <td>{{ $product['location'] }}</td>
                        <td>{{ $product['time'] }}</td>
                        <td>{{ $product['period'] }}</td>
                        <td>{{ $product['total'] }}</td>
                        <td>
                            <div>
                                @if ($product->productImage)
                                    <img src="{{ asset('images/product/' . $product->productImage) }}"
                                        alt="{{ $product->name }}" width="200" height="200">
                                @endif
                            </div>
                        </td>  
                        <td><button style="margin-right:5px" class="btn btn-primary">Edit</button><button  class="btn btn-danger">Delete</button></td>
                    </tr>
                     @endforeach   
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
